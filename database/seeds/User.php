<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = 'Faiq';
        $user->username = 'faiq';
        $user->email = 'faiq@test.com';
        $user->level = 'admin';
        $user->password = \Hash::make('12345678');
        $user->save();
    }
}
