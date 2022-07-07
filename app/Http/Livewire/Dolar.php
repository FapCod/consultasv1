<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dolar extends Component
{
    public $dolar; 
    public $datos=[];
    public function mount()
    {
        $this->dolar = '';
    }
    public function render()
    {
        $datos = $this->datos;
        return view('livewire.dolar',compact('datos'));
    }
    public function resetear()
    {
        $this->dolar = '';
    }

}
