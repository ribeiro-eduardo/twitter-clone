<?php

namespace App\Http\Livewire\Following;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $rows = 10;

    public function render()
    {
        $followings = Auth::user()->followings()->orderBy("name", "ASC")->paginate($this->rows);

        return view('livewire.following.show', compact("followings"));
    }

    public function goToProfilePage($username)
    {
        return redirect("/profile/$username");
    }

}
