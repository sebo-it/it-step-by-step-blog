<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->password = bcrypt('Admin123#@!');
        $user->email = 'admin@admin.pl';
        $user->save();
    }
}
