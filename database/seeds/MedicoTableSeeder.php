<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Model::unguard();

          DB::table('medicos')->insert([
              'nome' => 'Antonio Magalhaes',
              'num_cedula' => 111111,
              'created_at' => 12345,
              'updated_at' => 12345,
          ]);

          DB::table('medicos')->insert([
             'nome' => 'Luis Neiva',
             'num_cedula' => 222222,
             'created_at' => 12345,
             'updated_at' => 12345,
          ]);

          DB::table('medicos')->insert([
             'nome' => 'Maria Marreiros',
             'num_cedula' => 333333,
             'created_at' => 12345,
             'updated_at' => 12345,
          ]);


    }
}
