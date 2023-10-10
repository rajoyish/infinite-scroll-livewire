<?php

namespace App\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $greeting = 'Hello Livewire, my friend';

    public function render()
    {
        return view('livewire.example');
    }
}
