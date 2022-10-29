<?php

namespace App\Http\Livewire\UtilComponents;

use Livewire\Component;

class Error extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.util-components.error');
    }
}
