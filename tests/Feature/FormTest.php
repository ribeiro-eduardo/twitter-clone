<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    function can_create_tweet()
    {
        $user = \App\Models\User::factory(User::class)->create();
        $this->actingAs($user);

        Livewire::test(\App\Http\Livewire\Timeline\Form::class)
            ->set('description', 'foo')
            ->call('submit');

        $this->assertTrue(\App\Models\Tweet::query()->where('description', 'foo')->where('user_id', $user->id)->count() === 1);
    }
}
