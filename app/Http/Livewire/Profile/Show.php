<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class Show extends Component
{
    public $rows = 10;

    public $profile;

    public function mount(string $username)
    {
        $this->profile = \App\Models\User::where("username", $username)->first();
    }

    public function render()
    {
        $tweets = \App\Models\Tweet::where("user_id", $this->profile->id)
                                    ->orderBy("created_at", "DESC")
                                    ->paginate($this->rows);


        return view('livewire.profile.show', compact("tweets"));
    }

}
