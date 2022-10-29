<?php

namespace App\Http\Livewire\UtilComponents;

use Livewire\Component;

class SearchBar extends Component
{
    protected $listeners = ['search'];

    public function render()
    {
        return view('livewire.util-components.search-bar');
    }

    public function search()
    {

    }
}
