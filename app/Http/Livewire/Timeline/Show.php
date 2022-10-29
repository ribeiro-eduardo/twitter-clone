<?php

namespace App\Http\Livewire\Timeline;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $rows = 10;

    public function render()
    {
        $tweets = \App\Models\Tweet::whereIn("user_id", Auth::user()->followings->pluck("id"))
                                    ->orWhere("user_id", Auth::id())
                                    ->orderBy("created_at", "DESC")
                                    ->paginate($this->rows);

        return view('livewire.timeline.show', compact("tweets"));
    }

    public function postTweet()
    {
        return redirect()->route('postTweet');
    }

    public function goToProfilePage($username)
    {
        return redirect("/profile/$username");
    }

}
