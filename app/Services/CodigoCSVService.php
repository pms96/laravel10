<?php

namespace App\Services;

use App\Models\Documento;
use Exception;
use Illuminate\Support\Facades\DB;
use Predis\Client;

class CodigoCSVService
{
    public function generarCodigoCSV(int $longitud = 20): string
    {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $maximoIntentos = 100;
        $ttl = 60 * 60 * 24 * 365 * 5; // TTL en segundos

        $redis = new Client([
            'host' => env('REDIS_HOST'),
            'port' => 6379,
        ]);

        $redis->connect();

        for ($i = 0; $i < $maximoIntentos; $i++) {
            $codigo = str_shuffle(substr(str_repeat($caracteres, $longitud), 0, $longitud));

            // Buscar el código en la caché
            $cachedCode = $redis->get($codigo);

            if ($cachedCode) {
                continue;
            }

            // Verificar si el código ya existe en la base de datos
            $existe = DB::table('documentos')->where('csv', $codigo)->exists();

            if ( !$existe ) {
                // Guardar el código en la caché
                $redis->set($codigo, $codigo, $ttl);

                // Guardar el documento en la base de datos
                $documento = new Documento([
                    'csv' => $codigo,
                ]);
                $documento->save();
                
                return $codigo;

            } else {

                $redis->set($codigo, $codigo, $ttl);
            }
        }

        throw new Exception('No hay códigos CSV disponibles');
    }
    
}
