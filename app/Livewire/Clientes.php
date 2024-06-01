<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cliente;

class Clientes extends Component
{   
    public $cliente;
    public function render()
    {   
        $this->cliente = Cliente::all();
        return view('livewire.clientes');
    }
}
