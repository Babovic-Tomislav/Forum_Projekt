<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard(); // Disable mass assignment
        $this->call([UserTypeSeeder::class,
        UserTableSeeder::class,
        PostTableSeeder::class,
        CommentTableSeeder::class,
        ]);


        Model::reguard(); // Enable mass assignment
    }
}
