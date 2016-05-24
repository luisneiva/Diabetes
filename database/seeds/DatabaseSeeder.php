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
         $this->call(AlimentoTableSeeder::class);
         $this->call(BebidaTableSeeder::class);
         //$this->call(MedicoTableSeeder::class);
         $this->call(ExercicioTableSeeder::class);
    }
}
