<?php

namespace App\Http\Livewire\Following;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $rows = 10;
    public $user;
    public $title;

    public function mount($profileId = null)
    {
        if ($profileId != null) {
            $this->user = \App\Models\User::find($profileId);
            $this->title = 'Who\'s following @' . $this->user->username;
        } else {
            $this->user = Auth::user();
            $this->title = 'Who\'s following me';
        }
    }

    public function render()
    {
        $followings = $this->user->followings()->orderBy("name", "ASC")->paginate($this->rows);

        return view('livewire.following.show', compact("followings"));
    }

    public function unfollow($userToBeFUnfollowedId)
    {
        Auth::user()->followings()->detach($userToBeFUnfollowedId);
        session()->flash('success', 'You are not following @' . \App\Models\User::find($userToBeFUnfollowedId)->username. ' anymore!');
        return redirect()->route('following');
    }

    public function goToProfilePage($username)
    {
        return redirect("/profile/$username");
    }

}
