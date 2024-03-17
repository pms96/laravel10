<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FormularioUsuario extends Model
{
    use HasFactory;

     /**
     * Documentos table
     *
     * @var string
     */
    protected $table = 'FormularioUsuarios';

    /**
     * Documentos fields
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'nif', 
        'fecha_registro'
    ];

    public static function getHasta90DiasSql() : array
    {
        $interval = "'90 days'";
        $sql = 'SELECT f.* FROM "public"."FormularioUsuarios" f INNER JOIN "public"."Usuarios" u ON f."nif" = u."nif" WHERE f."nif" IS NOT NULL AND f."fecha_registro" >= NOW() - INTERVAL ' . $interval . ';';
        
        $result = DB::select($sql);

        return !empty($result) ? $result  : []; 
    }

    public static function getHasta90DiasEloquent() : array
    {

        $result = FormularioUsuario::select('public.FormularioUsuarios.*')
        ->join('public.Usuarios as u', 'public.FormularioUsuarios.nif', '=', 'u.nif')
        ->whereNotNull('public.FormularioUsuarios.nif')
        ->where('public.FormularioUsuarios.fecha_registro', '>=', Carbon::now()->subDays(90))
        ->get()->toArray();
        
        return !empty($result) ? $result  : []; 
    }
    
}
