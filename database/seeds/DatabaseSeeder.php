<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(UsersTableSeeder::class);
        
    }
}
