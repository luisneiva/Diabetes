<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AlimentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Model::unguard();

         DB::table('alimentos')->insert([
            'nome' => 'batata',
            'qtd_carboidratos' => 17,
            'calorias' => 77,
            'proteinas' => 2,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'batata doce',
            'qtd_carboidratos' => 20,
            'calorias' => 86,
            'proteinas' => 1.6,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'arroz',
            'qtd_carboidratos' => 130,
            'calorias' => 28,
            'proteinas' => 2.7,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'batata frita',
            'qtd_carboidratos' => 41,
            'calorias' => 312,
            'proteinas' => 3.4,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'hamburguer',
            'qtd_carboidratos' => 24,
            'calorias' => 295,
            'proteinas' => 17,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'pizza',
            'qtd_carboidratos' => 33,
            'calorias' => 266,
            'proteinas' => 11,
            'created_at' => 12345,
            'updated_at' => 12345,
        ]);

    }
}
