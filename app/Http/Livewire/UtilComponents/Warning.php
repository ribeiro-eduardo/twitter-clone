<?php

namespace App\Http\Livewire\Util\Components;

use Livewire\Component;

class Warning extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.util-components.warning');
    }
}
