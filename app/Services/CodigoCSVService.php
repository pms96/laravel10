<?php

namespace App\Services;

use App\Models\Documento;
use Exception;
use Illuminate\Support\Facades\DB;
use Predis\Client;

class CodigoCSVService implements CodigoCSVServiceInterface
{
    public function generarCodigoCSV(int $longitud = 20): string
    {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $maximoIntentos = 100;

        for ($i = 0; $i < $maximoIntentos; $i++) {

            $codigo = str_shuffle(substr(str_repeat($caracteres, $longitud), 0, $longitud));

            // Comprobamos que el csv no existe
            if ( !Documento::where('csv', $codigo)->exists() ) {

                return $codigo;
            }
        }

        throw new Exception('No hay códigos CSV disponibles');
    }



    public function generarCodigoCSVRedis(int $longitud = 20): string
    {
        // Conexión a redis
        $redis = new Client([
            'host' => env('REDIS_HOST'),
            'port' => env('REDIS_PORT'),
        ]);
        $redis->connect();

        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        do {            
            $codigo = substr(str_shuffle(str_repeat($caracteres, $longitud)), 0, $longitud);

            // Buscar el código en la caché
            $cachedCode = $redis->get($codigo);

            if ($cachedCode) {
                continue;
            }

            // Verificamos que Redís se encuentra en funcioanamiento 
            if (!config('database.redis')) {
                throw new Exception('La variable de entorno REDIS_HOST no está configurada');
            }

            // Verificar si el código ya existe en la base de datos
            $existe = Documento::where('csv', $codigo)->exists();

            if ( !$existe ) {
                // Guardar el código en la caché modo PERSIST
                $redis->set($codigo, $codigo);
                
                return $codigo;
            }

        } while (true);

        throw new Exception('No hay códigos CSV disponibles');
    }
    
}
