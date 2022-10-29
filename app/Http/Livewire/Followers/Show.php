<?php

namespace App\Http\Livewire\Followers;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $rows = 10;

    public function render()
    {
        $followers  = Auth::user()->followers()->orderBy("name", "ASC")->paginate($this->rows);
        $followings = Auth::user()->followings;

        return view('livewire.followers.show', ["followers" => $followers, "followings" => $followings]);
    }

    public function followBack($userToBeFollowedId)
    {
        Auth::user()->followings()->attach($userToBeFollowedId);
    }

    public function unfollow($userToBeFUnfollowedId)
    {
        Auth::user()->followings()->detach($userToBeFUnfollowedId);
    }

    public function goToProfilePage($username)
    {
        return redirect("/profile/$username");
    }

}
