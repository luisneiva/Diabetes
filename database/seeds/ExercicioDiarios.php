<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ExercicioDiarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Model::unguard();

            DB::table('exercicio_diarios')->insert([
              'user_id' => '4',
              'exercicio_id' => 3,
              'data' => '2016-05-28',
              'tempo_gasto' => 15,
              'calorias_gastas' => 341,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

          DB::table('exercicio_diarios')->insert([
              'user_id' => '4',
              'exercicio_id' => 13,
              'data' => '2016-05-28',
              'tempo_gasto' => 25,
              'calorias_gastas' => 234,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

          DB::table('exercicio_diarios')->insert([
              'user_id' => '4',
              'exercicio_id' => 8,
              'data' => '2016-05-28',
              'tempo_gasto' => 20,
              'calorias_gastas' => 125,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

           DB::table('exercicio_diarios')->insert([
              'user_id' => '4',
              'exercicio_id' => 6,
              'data' => '2016-05-28',
              'tempo_gasto' => 14,
              'calorias_gastas' => 201,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

           DB::table('exercicio_diarios')->insert([
              'user_id' => '4',
              'exercicio_id' => 11,
              'data' => '2016-05-28',
              'tempo_gasto' => 10,
              'calorias_gastas' => 145,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);



            DB::table('exercicio_diarios')->insert([
              'user_id' => '5',
              'exercicio_id' => 3,
              'data' => '2016-05-28',
              'tempo_gasto' => 18,
              'calorias_gastas' => 234,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

          DB::table('exercicio_diarios')->insert([
              'user_id' => '5',
              'exercicio_id' => 11,
              'data' => '2016-05-28',
              'tempo_gasto' => 12,
              'calorias_gastas' => 234,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

          DB::table('exercicio_diarios')->insert([
              'user_id' => '5',
              'exercicio_id' => 8,
              'data' => '2016-05-28',
              'tempo_gasto' => 13,
              'calorias_gastas' => 43,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

           DB::table('exercicio_diarios')->insert([
              'user_id' => '5',
              'exercicio_id' => 2,
              'data' => '2016-05-28',
              'tempo_gasto' => 45,
              'calorias_gastas' => 100,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

           DB::table('exercicio_diarios')->insert([
              'user_id' => '5',
              'exercicio_id' => 10,
              'data' => '2016-05-28',
              'tempo_gasto' => 5,
              'calorias_gastas' => 67,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);


            DB::table('exercicio_diarios')->insert([
              'user_id' => '6',
              'exercicio_id' => 2,
              'data' => '2016-05-28',
              'tempo_gasto' => 4,
              'calorias_gastas' => 123,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

          DB::table('exercicio_diarios')->insert([
              'user_id' => '6',
              'exercicio_id' => 9,
              'data' => '2016-05-28',
              'tempo_gasto' => 45,
              'calorias_gastas' => 234,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

          DB::table('exercicio_diarios')->insert([
              'user_id' => '6',
              'exercicio_id' => 6,
              'data' => '2016-05-28',
              'tempo_gasto' => 4,
              'calorias_gastas' => 67,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

           DB::table('exercicio_diarios')->insert([
              'user_id' => '5',
              'exercicio_id' => 8,
              'data' => '2016-05-28',
              'tempo_gasto' => 5,
              'calorias_gastas' => 49,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

           DB::table('exercicio_diarios')->insert([
              'user_id' => '5',
              'exercicio_id' => 7,
              'data' => '2016-05-28',
              'tempo_gasto' => 8,
              'calorias_gastas' => 61,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
    }
}
