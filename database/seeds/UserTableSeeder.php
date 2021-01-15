<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory;

class UserTableSeeder extends Factory
{
    public function run(): void
    {
        $faker = Factory::create();
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make(Str::random(10)),
        ]);



    }
}
