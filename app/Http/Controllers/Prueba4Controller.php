<?php

namespace App\Http\Controllers;

use App\Repositories\FormularioUsuarioRepository;
use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;

class Prueba4Controller extends Controller
{
     /**
     * @var UsuarioRepository
     */
    protected $usuarioRepository;

    /**
     * @var FormularioUsuarioRepository
     */
    protected $formularioUsuarioRepository;


    /**
     * CompetitionController constructor.
     * @param UsuarioRepository $usuarioRepository
     * @param FormularioUsuarioRepository $formularioUsuarioRepository
     */
    public function __construct(UsuarioRepository $usuarioRepository, FormularioUsuarioRepository $formularioUsuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
        $this->formularioUsuarioRepository = $formularioUsuarioRepository;
    }


    public function getPrueba4 ()
    {
        $tabs = [];
        
        $tabs['tab1'] = $this->formularioUsuarioRepository->getHasta90DiasSql();
        $tabs['tab2'] = $this->usuarioRepository->getHombres25Mujeres20Sql();
        $tabs['tab3'] = $this->usuarioRepository->getNifNoNuloSql();
        $tabs['tab4'] = $this->usuarioRepository->getSumaPorRangosEdadNifNoNuloSql();
        $tabs['tab5'] = $this->usuarioRepository->getUsuariosMayores60Sql();

        return view('prueba.4', $tabs);
    } 
}
