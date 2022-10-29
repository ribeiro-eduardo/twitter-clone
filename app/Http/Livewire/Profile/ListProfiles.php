<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ListProfiles extends Component
{
    public $rows = 10;

    public $usernameSearch;
    public $profiles;
    public $followings;

    public function mount()
    {
        $this->followings = Auth::user()->followings;
    }

    public function render()
    {
        return view('livewire.profile.list-profiles');
    }

    public function search()
    {
        $username = $this->usernameSearch;
        $this->profiles = \App\Models\User::where('username', 'like', "%$username%")->get();
    }

    public function follow($userToBeFollowedId)
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
