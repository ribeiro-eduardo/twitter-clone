<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('followings')->insert([
            [
                'followed_user_id' => 1,
                'following_user_id' => 2
            ],
            [
                'followed_user_id' => 1,
                'following_user_id' => 3
            ],
            [
                'followed_user_id' => 1,
                'following_user_id' => 4
            ],
            [
                'followed_user_id' => 1,
                'following_user_id' => 5
            ],
            [
                'followed_user_id' => 1,
                'following_user_id' => 6
            ],


            [
                'followed_user_id' => 2,
                'following_user_id' => 1
            ],
            [
                'followed_user_id' => 2,
                'following_user_id' => 3
            ],
            [
                'followed_user_id' => 2,
                'following_user_id' => 4
            ],
            [
                'followed_user_id' => 2,
                'following_user_id' => 5
            ],
            [
                'followed_user_id' => 2,
                'following_user_id' => 6
            ],
            [
                'followed_user_id' => 3,
                'following_user_id' => 1
            ],
            [
                'followed_user_id' => 3,
                'following_user_id' => 2
            ],
            [
                'followed_user_id' => 3,
                'following_user_id' => 4
            ],
            [
                'followed_user_id' => 3,
                'following_user_id' => 5
            ],
            [
                'followed_user_id' => 3,
                'following_user_id' => 6
            ],
            [
                'followed_user_id' => 4,
                'following_user_id' => 1
            ],
            [
                'followed_user_id' => 4,
                'following_user_id' => 2
            ],
            [
                'followed_user_id' => 4,
                'following_user_id' => 3
            ],
            [
                'followed_user_id' => 4,
                'following_user_id' => 5
            ],
            [
                'followed_user_id' => 4,
                'following_user_id' => 6
            ],


            [
                'followed_user_id' => 2,
                'following_user_id' => 1
            ],

            [
                'followed_user_id' => 2,
                'following_user_id' => 3
            ],

            [
                'followed_user_id' => 2,
                'following_user_id' => 4
            ],

            [
                'followed_user_id' => 2,
                'following_user_id' => 5
            ],

            [
                'followed_user_id' => 2,
                'following_user_id' => 6
            ],


            [
                'followed_user_id' => 3,
                'following_user_id' => 1
            ],

            [
                'followed_user_id' => 3,
                'following_user_id' => 2
            ],

            [
                'followed_user_id' => 3,
                'following_user_id' => 4
            ],

            [
                'followed_user_id' => 3,
                'following_user_id' => 5
            ],

            [
                'followed_user_id' => 3,
                'following_user_id' => 6
            ],


            [
                'followed_user_id' => 4,
                'following_user_id' => 1
            ],

            [
                'followed_user_id' => 4,
                'following_user_id' => 2
            ],

            [
                'followed_user_id' => 4,
                'following_user_id' => 3
            ],

            [
                'followed_user_id' => 4,
                'following_user_id' => 5
            ],

            [
                'followed_user_id' => 4,
                'following_user_id' => 6
            ],


        ]);
    }
}
