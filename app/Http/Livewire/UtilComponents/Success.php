<?php

namespace App\Http\Livewire\UtilComponents;

use Livewire\Component;

class Success extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.util-components.success');
    }
}
