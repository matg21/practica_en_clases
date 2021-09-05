<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS= 0');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS= 1');
        
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin3@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin4@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 4
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin5@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 5
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin6@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 6
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin7@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 7
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin8@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 8
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin9@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 9
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin10@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 10
        ]);
    }
}
