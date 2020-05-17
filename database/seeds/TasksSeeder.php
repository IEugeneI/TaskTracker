<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Fix header',
            'description' => 'Fix header in front',
            'status' => 'View',
            'user_id' => 1,
        ]);

        DB::table('tasks')->insert([
            'title' => 'Api',
            'description' => 'Make backend api',
            'status' => 'In Progress',
            'user_id' => 2,
        ]);

        DB::table('tasks')->insert([
            'title' => 'Fix',
            'description' => 'Fix footer',
            'status' => 'Done',
            'user_id' => 3,
        ]);

        DB::table('tasks')->insert([
            'title' => 'Database connection',
            'description' => 'Settings env file ,make database connection',
            'status' => 'Done',
            'user_id' => 4,
        ]);

        DB::table('tasks')->insert([
            'title' => 'Api',
            'description' => 'Make tasks tracker api',
            'status' => 'In Progress',
            'user_id' => 5,
        ]);
    }
}
