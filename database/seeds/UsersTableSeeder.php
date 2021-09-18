<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        [    'name' => 'ああああ',
            'email' => 'test3@test.com',
            'password' => Hash::make('password123'),
        ],[    'name' => 'いいいい',
        'email' => 'test4@test.com',
        'password' => Hash::make('password124'),
    ]]);
    }
}
