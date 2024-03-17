<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function obtenerRolesDeUsuario(Request $request)
    {
        // Obtener el usuario
        $usuario = Usuario::findOrFail($request->id);

        $roles = $usuario->roles;
    
        $idsDeRoles = $roles->pluck('id')->toArray();
        $nombresDeRoles = $roles->pluck('name')->toArray();
    
        // Devolver una colección con los ID y los nombres de los roles
        return response()->json([
            'idsRoles' => $idsDeRoles,
            'nombresRoles' => $nombresDeRoles
        ], 200);
    }


    public function asignarRolesUsuario(Request $request)
    {
        $usuario = Usuario::findOrFail($request->id);

        // Limpiar roles anteriores
        $usuario->roles()->detach();
        
        // Asignar los nuevos roles
        foreach ($request->input('roles') as $rolNombre) {
            $usuario->assignRole($rolNombre);
        }

        return response()->json([
            'roles' => $usuario->roles,
        ], 200);
    }
}
