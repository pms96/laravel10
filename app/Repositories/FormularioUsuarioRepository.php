<?php

namespace App\Repositories;

use App\Models\FormularioUsuario;

class FormularioUsuarioRepository
{
    /**
     * @var FormularioUsuario
     */
    protected $formuarioUsuario;

    public function __construct()
    {
        $this->formuarioUsuario         = new FormularioUsuario();
        
    }

    public function getHasta90DiasSql (): array
    {
        return $this->formuarioUsuario->getHasta90DiasSql();
    }  

    public function getHasta90DiasEloquent (): array
    {
        return $this->formuarioUsuario->getHasta90DiasEloquent();
    } 
 
}
