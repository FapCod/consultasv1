<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ruc extends Component
{
    public $ruc; 
    public $datos=[];
    public function mount()
    {
        $this->ruc = '';
    }
    public function render()
    {
        return view('livewire.ruc');
    }
}
