<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Bordados em geral'
        ]);
        DB::table('types')->insert([
            'name' => 'Pingente bordado'
        ]);
        DB::table('types')->insert([
            'name' => 'Chaveiro Bordado'
        ]);
        DB::table('types')->insert([
            'name' => 'Película de unha somente contorno'
        ]);
        DB::table('types')->insert([
            'name' => 'Película de unha preenchida'
        ]);
    }
}
