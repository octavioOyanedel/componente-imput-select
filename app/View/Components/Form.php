<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $ruta;
    public $metodo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ruta, $metodo)
    {
        $this->ruta = $ruta;
        $this->metodo = $metodo;
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
