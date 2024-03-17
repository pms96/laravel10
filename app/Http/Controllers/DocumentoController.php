<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function buscarDocumentoIds(Request $request)
    {
        
        $validacion = [
            'ids' => ['required', 'regex:/^\d+(,\d+)*$/'], // Expresión regular para validar int o array separado por comas
        ];

        // Validamos los datos del 
        $validarDatos = $request->validate($validacion);
        $input = $validarDatos['ids'];

        try {

            // Convertir el input a entero o a un array según corresponda
            if (strpos($input, ',') !== false) {
                
                $ids = explode(',', $input);
                $ids = array_map('intval', $ids);
            } else {
                
                $ids = intval($input);
            }
            
            $documento = Documento::buscarDocumentoIds($ids)->get();

            return response()->json(['documentos' => $documento], 200);

        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500); 
        }
    }
}
