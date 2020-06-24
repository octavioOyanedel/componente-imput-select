<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $coleccion;
    public $kColeccion;
    public $nombre;
    public $nuevo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $coleccion, $kColeccion, $nombre, $nuevo)
    {
        $this->label = $label;
        $this->coleccion = $coleccion;
        $this->kColeccion = $kColeccion;
        $this->nombre = $nombre;
        $this->nuevo = $nuevo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
