<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CodigoCSVServiceInterface;

class UsuarioController extends Controller
{
    private $codigoCSVService;

    public function __construct(CodigoCSVServiceInterface $codigoCSVService)
    {
        $this->codigoCSVService = $codigoCSVService;
    }

    public function crearRegistro(Request $request)
    {
        try {
            $codigo = $this->codigoCSVService->generarCodigoCSV();
            // Aquí puedes usar el código generado para crear un nuevo usuario
            // Por ejemplo:
            // $usuario = new User();
            // $usuario->nombre = $request->input('nombre');
            // $usuario->csv = $codigo;
            // $usuario->save();
            return response()->json(['codigo_csv' => $codigo], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
