<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $ruta;
    public $metodo;
    public $coleccion;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ruta, $metodo, $coleccion)
    {
        $this->ruta = $ruta;
        $this->metodo = $metodo;
        $this->coleccion = $coleccion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
