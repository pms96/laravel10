<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * Usuarios table
     *
     * @var string
     */
    protected $table = 'Usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nif',
        'nombre',
        'apellido',
        'fecha_nacimiento',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'model_has_roles', 'model_id', 'role_id');
    }

    public static function getHombres25Mujeres20Sql() : array
    {
        $interval1 = "'25 years'";
        $generoMascualino = "'M'";
        $interval2 = "'20 years'";
        $generoFemenino = "'F'";
        $sql = 'SELECT u.* FROM "public"."Usuarios" u INNER JOIN "public"."InformacionUsuarios" i ON u.id = i.id_usuario WHERE (i."genero" = ' . $generoMascualino . ' AND u."fecha_nacimiento" <= CURRENT_DATE - INTERVAL ' . $interval1 . ' ) OR (i."genero"= ' . $generoFemenino . ' AND u."fecha_nacimiento" <=CURRENT_DATE - INTERVAL ' . $interval2 . ' );';
        
        $result = DB::select($sql);

        return !empty($result) ? $result  : []; 
    }

    public static function getHombres25Mujeres20Eloquent() : array
    {

        $result = Usuario::select('public.Usuarios.*')
        ->join('public.InformacionUsuarios as i', 'public.Usuarios.id', '=', 'i.id_usuario')
        ->where(function ($query) {
            $query->where('i.genero', 'M')
                  ->where('public.Usuarios.fecha_nacimiento', '<=', Carbon::now()->subYears(25));
        })
        ->orWhere(function ($query) {
            $query->where('i.genero', 'F')
                  ->where('public.Usuarios.fecha_nacimiento', '<=', Carbon::now()->subYears(20));
        })
        ->get()->toArray();
        
        return !empty($result) ? $result  : []; 
    }

    public static function getNifNoNuloSql() : array
    {
        $sql = 'SELECT * FROM "public"."Usuarios" WHERE nif IS NOT NULL;';
        
        $result = DB::select($sql);

        return !empty($result) ? $result  : []; 
    }

    public static function getNifNoNuloEloquent() : array
    {

        $result = Usuario::whereNotNull('nif')->get()->toArray();
        
        return !empty($result) ? $result  : []; 
    }
    

    public static function getSumaPorRangosEdadNifNoNuloSql() : array
    {
        $sql = 'SELECT age_bucket AS age_range, COUNT(*) AS num_people FROM ( SELECT WIDTH_BUCKET(EXTRACT(YEAR FROM AGE(fecha_nacimiento)), 0, 100, 10) - 1 AS age_bucket FROM public."Usuarios" WHERE nif IS NOT NULL ) AS age_ranges GROUP BY age_bucket ORDER BY age_bucket;';
        
        $result = DB::select($sql);

        return !empty($result) ? $result  : []; 
    }

    public static function getSumaPorRangosEdadNifNoNuloEloquent() : array
    {

        // hay solo otra opción para no tenenr que usar el selectRaw
        // haciendo la consulta sin este select y tratar la edad por php
        $result = Usuario::selectRaw('
                    age_bucket AS age_range,
                    COUNT(*) AS num_people
                ')
                ->fromSub(function ($query) {
                    $query->selectRaw('
                            WIDTH_BUCKET(EXTRACT(YEAR FROM AGE(fecha_nacimiento)), 0, 100, 10) - 1 AS age_bucket
                        ')
                        ->from('public.Usuarios')
                        ->whereNotNull('nif');
                }, 'age_ranges')
                ->groupBy('age_bucket')
                ->orderBy('age_bucket')
                ->get()->toArray();
        
        return !empty($result) ? $result  : []; 
    }

    public static function getUsuariosMayores60Sql() : array
    {
        $interval = "'60 year'";
        $sql = 'SELECT * FROM public."Usuarios" WHERE nif IS NOT NULL AND fecha_nacimiento >= CURRENT_DATE - INTERVAL ' . $interval . ' ORDER BY fecha_nacimiento;';
        
        $result = DB::select($sql);

        return !empty($result) ? $result  : []; 
    }

    public static function getUsuariosMayores60Eloquent() : array
    {

        $result = Usuario::whereNotNull('nif')
        ->where('fecha_nacimiento', '>=', Carbon::now()->subYears(60))
        ->orderBy('fecha_nacimiento')
        ->get()->toArray();
        
        return !empty($result) ? $result  : []; 
    }
    
}
