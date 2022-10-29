<?php

namespace App\Http\Livewire\Followers;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $rows = 10;
    public $user;

    public function mount($profileId = null)
    {
        if ($profileId != null) {
            $this->user = \App\Models\User::find($profileId);
        } else {
            $this->user = Auth::user();
        }
    }

    public function render()
    {
        $followers  = $this->user->followers()->orderBy("name", "ASC")->paginate($this->rows);
        $followings = $this->user->followings;

        return view('livewire.followers.show', ["followers" => $followers, "followings" => $followings]);
    }

    public function followBack($userToBeFollowedId)
    {
        Auth::user()->followings()->attach($userToBeFollowedId);
        session()->flash('success', 'You are now following @' . \App\Models\User::find($userToBeFollowedId)->username. '!');
        return redirect()->route('followers');
    }

    public function unfollow($userToBeFUnfollowedId)
    {
        Auth::user()->followings()->detach($userToBeFUnfollowedId);
        session()->flash('success', 'You are not following @' . \App\Models\User::find($userToBeFUnfollowedId)->username. ' anymore!');
        return redirect()->route('followers');
    }

    public function goToProfilePage($username)
    {
        return redirect("/profile/$username");
    }

}
