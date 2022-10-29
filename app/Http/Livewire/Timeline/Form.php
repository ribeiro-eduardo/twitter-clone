<?php

namespace App\Http\Livewire\Timeline;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Form extends Component
{
    public $description;

    protected $rules = [
        'description' => 'required|min:1|max:280',
    ];

    public function render()
    {
        return view('livewire.timeline.form');
    }

    public function submit()
    {
        $this->validate();
        try {
            if ($this->create()) {
                session()->flash('success', "Tweet posted successfully!");
                return redirect()->route('timeline');
            }
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('error', "Error on creating tweet!");
            return redirect()->route('timeline');
        }
    }

    private function create()
    {
        return DB::transaction(function () {
            $tweet = new \App\Models\Tweet();

            $tweet->description = $this->description;
            $tweet->user_id = Auth::id();

            $tweet->save();

            return $tweet->id;
        });
    }

    public function cancelar()
    {
        return redirect()->route('timeline');
    }
}
