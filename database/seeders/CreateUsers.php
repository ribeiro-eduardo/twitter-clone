<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Eduardo Ribeiro",
                'email' => 'edu0995@gmail.com',
                'username' => 'edu0995',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Gary L. Newman",
                'email' => 'gary@gmail.com',
                'username' => 'gary',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Evan Boyer",
                'email' => 'evan@gmail.com',
                'username' => 'evan',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Brennan Raymond",
                'email' => 'brennan@gmail.com',
                'username' => 'brennan',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Wade Terrell",
                'email' => 'wade@gmail.com',
                'username' => 'wade',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Kiri Wallace",
                'email' => 'kiri@gmail.com',
                'username' => 'kiri',
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
