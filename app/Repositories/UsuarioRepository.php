<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository
{
    /**
     * @var Usuario
     */
    protected $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
        
    }

    public function getHombres25Mujeres20Sql (): array
    {
        return $this->usuario->getHombres25Mujeres20Sql();
    }  

    public function getHombres25Mujeres20Eloquent (): array
    {
        return $this->usuario->getHombres25Mujeres20Eloquent();
    } 

    public function getNifNoNuloSql (): array
    {
        return $this->usuario->getNifNoNuloSql();
    }  

    public function getNifNoNuloEloquent (): array
    {
        return $this->usuario->getNifNoNuloEloquent();
    } 

    public function getSumaPorRangosEdadNifNoNuloSql (): array
    {
        return $this->usuario->getSumaPorRangosEdadNifNoNuloSql();
    }  

    public function getSumaPorRangosEdadNifNoNuloEloquent (): array
    {
        return $this->usuario->getSumaPorRangosEdadNifNoNuloEloquent();
    } 

    public function getUsuariosMayores60Sql (): array
    {
        return $this->usuario->getUsuariosMayores60Sql();
    }  

    public function getUsuariosMayores60Eloquent (): array
    {
        return $this->usuario->getUsuariosMayores60Eloquent();
    } 
 
}
