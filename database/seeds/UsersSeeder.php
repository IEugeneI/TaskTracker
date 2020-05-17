<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Valera',
            'last_name' => 'Valeriev',
            'email' => Str::random(10) . '@gmail.com',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Vasilii',
            'last_name' => 'Vetrov',
            'email' => Str::random(10) . '@gmail.com',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Genadii',
            'last_name' => 'Shebrov',
            'email' => Str::random(10) . '@gmail.com',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Valera',
            'last_name' => 'Valeriev',
            'email' => Str::random(10) . '@gmail.com',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Alexandr',
            'last_name' => 'Petrov',
            'email' => Str::random(10) . '@gmail.com',
        ]);
    }
}
