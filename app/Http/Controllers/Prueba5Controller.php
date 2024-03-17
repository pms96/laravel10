<?php

namespace App\Http\Controllers;

use App\Repositories\FormularioUsuarioRepository;
use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;

class Prueba5Controller extends Controller
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


    public function getPrueba5 ()
    {
        $tabs = [];
        
        $tabs['tab1'] = $this->formularioUsuarioRepository->getHasta90DiasEloquent();
        $tabs['tab2'] = $this->usuarioRepository->getHombres25Mujeres20Eloquent();
        $tabs['tab3'] = $this->usuarioRepository->getNifNoNuloEloquent();
        $tabs['tab4'] = $this->usuarioRepository->getSumaPorRangosEdadNifNoNuloEloquent();
        $tabs['tab5'] = $this->usuarioRepository->getUsuariosMayores60Eloquent();

        return view('prueba.5', $tabs);
    } 
}
