<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
            [
                'description' => "Hello, good morning!",
                'user_id' => 1
            ],
            [
                'description' => "Can't believe it's friday already!",
                'user_id' => 2
            ],
            [
                'description' => "Thinking about life...",
                'user_id' => 3
            ],
            [
                'description' => "I think it's time for a change",
                'user_id' => 1
            ],
            [
                'description' => "Life is good!",
                'user_id' => 1
            ],
            [
                'description' => "Today I will go to the beach!",
                'user_id' => 2
            ],
            [
                'description' => "I think it's time for a change",
                'user_id' => 5
            ],
            [
                'description' => "Life is good!",
                'user_id' => 6
            ],
            [
                'description' => "Today I will go to the beach!",
                'user_id' => 4
            ],
        ]);
    }
}
