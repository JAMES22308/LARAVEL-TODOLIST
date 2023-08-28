<?php

namespace App\Livewire;

use Livewire\Component;

class LivewireComponent extends Component
{

    public $message = "hello livewire";
    
    public function render()
    {
        return view('livewire.livewire-component');
    }
}
