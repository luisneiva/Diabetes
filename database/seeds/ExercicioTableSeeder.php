<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ExercicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Model::unguard();

         DB::table('exercicios')->insert([
            'tipo' => 'Bicicleta',
            'calorias_gastas' => 126,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

          DB::table('exercicios')->insert([
            'tipo' => 'Cicicleta acelerado',
            'calorias_gastas' => 276,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

           DB::table('exercicios')->insert([
            'tipo' => 'Correr (12km/h)',
            'calorias_gastas' => 445,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

            DB::table('exercicios')->insert([
            'tipo' => 'Correr (plano)',
            'calorias_gastas' => 310,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

            DB::table('exercicios')->insert([
            'tipo' => 'Correr (inclinado)',
            'calorias_gastas' => 330,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

            DB::table('exercicios')->insert([
            'tipo' => 'Ginastica aerobica',
            'calorias_gastas' => 200,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

            DB::table('exercicios')->insert([
            'tipo' => 'Ginastica localizada',
            'calorias_gastas' => 130,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);
            DB::table('exercicios')->insert([
            'tipo' => 'Futebol',
            'calorias_gastas' => 330,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

            DB::table('exercicios')->insert([
            'tipo' => 'Nadar costas',
            'calorias_gastas' => 250,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

            DB::table('exercicios')->insert([
            'tipo' => 'Nadar peito',
            'calorias_gastas' => 260,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

            DB::table('exercicios')->insert([
            'tipo' => 'Nadar borboleta',
            'calorias_gastas' => 280,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

            DB::table('exercicios')->insert([
            'tipo' => 'Saltar à corda',
            'calorias_gastas' => 220,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);
            DB::table('exercicios')->insert([
            'tipo' => 'Tenis',
            'calorias_gastas' => 240,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);
    }
}
