<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use App\Services\CodigoCSVServiceInterface;
use App\Services\CodigoCSVService;


class UsuarioController extends Controller
{
    private $codigoCSVService;

    public function __construct(CodigoCSVServiceInterface $codigoCSVService)
    {
        $this->codigoCSVService = $codigoCSVService;
    }

    public function registro()
    {
        return view('registro');
    }

    public function crearRegistro(Request $request)
    {
        try {
            // Aquí puedes usar el código generado para crear un nuevo usuario hay que añadir los inputs al formulario
            // $usuario = new User();
            // $usuario->nombre             = $request->input('nombre');
            // $usuario->apellido           = $request->input('apellido');
            // $usuario->nif                = $reques->input('nif);
            // $usuario->fecha_nacimiento   = $reques->input('fecha_nacimiento);
            // $usuario->save();
            
            //En este caso solo vamos a generar el CSV
            $codigo = $this->codigoCSVService->generarCodigoCSVRedis();
            $documento = new Documento();
            $documento->nombre  = $request->input('nombre');
            $documento->csv     = $codigo;
            $documento->save();

            return response()->json(['codigo_csv' => $codigo], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
