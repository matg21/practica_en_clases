<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Profession_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::statement('SET FOREIGN_KEY_CHECKS= 0');
        DB::table('profession')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS= 1');

        DB::table('profession')->insert([
            'title' => 'Front-end developer'
        ]);
        DB::table('profession')->insert([
            'title' => 'Back-end developer'
        ]);
        DB::table('profession')->insert([
            'title' => 'Laravel developer'
        ]);
        DB::table('profession')->insert([
            'title' => 'Administrador de base datos'
        ]);
        DB::table('profession')->insert([
            'title' => 'Ordenanza'
        ]);
        DB::table('profession')->insert([
            'title' => 'Gerente'
        ]);
        DB::table('profession')->insert([
            'title' => 'Administrador'
        ]);
        DB::table('profession')->insert([
            'title' => 'Ordenanza'
        ]);
        DB::table('profession')->insert([
            'title' => 'Docente'
        ]);
        DB::table('profession')->insert([
            'title' => 'Vigilancia'
        ]);
    }
}
