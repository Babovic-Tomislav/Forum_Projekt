<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        factory(App\User::class, 50)->create();
        DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' =>bcrypt('administrator2020'), // password
            'remember_token' => Str::random(10),
            'user_type' => 1,
            'created_at'=> '2020-06-17 00:46:44',
            'updated_at' => '2020-06-17 00:46:44',
        ]);
        DB::table('users')->insert([
            'name' => 'korisnik',
            'email' => 'korisnik@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('korisnik2020'), // password
            'remember_token' => Str::random(10),
            'user_type' => 2,
            'created_at'=> '2020-06-17 00:46:44',
            'updated_at' => '2020-06-17 00:46:44',
        ]);
    }
}
