<?php

namespace App\Livewire;

use Livewire\Component;

class LivewireComponent extends Component
{



    public $message = "livewire 3 testing";
    
    public function render()
    {
        return view('livewire.livewire-component');
    }

    public function handleClick(){


        sleep(2);

    }
}
