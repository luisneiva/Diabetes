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
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'batata doce',
            'qtd_carboidratos' => 20,
            'calorias' => 86,
            'proteinas' => 1.6,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'arroz',
            'qtd_carboidratos' => 130,
            'calorias' => 28,
            'proteinas' => 2.7,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'batata frita',
            'qtd_carboidratos' => 41,
            'calorias' => 312,
            'proteinas' => 3.4,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'hamburguer',
            'qtd_carboidratos' => 24,
            'calorias' => 295,
            'proteinas' => 17,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

        DB::table('alimentos')->insert([
            'nome' => 'pizza',
            'qtd_carboidratos' => 33,
            'calorias' => 266,
            'proteinas' => 11,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

          DB::table('alimentos')->insert([
            'nome' => 'manteiga',
            'qtd_carboidratos' => 0.1,
            'calorias' => 717,
            'proteinas' => 0.9,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);
            DB::table('alimentos')->insert([
            'nome' => 'pão',
            'qtd_carboidratos' => 49,
            'calorias' => 265,
            'proteinas' => 9,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);
            DB::table('alimentos')->insert([
            'nome' => 'ovo',
            'qtd_carboidratos' => 13,
            'calorias' => 155,
            'proteinas' => 1.1,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

              DB::table('alimentos')->insert([
            'nome' => 'chocolate',
            'qtd_carboidratos' => 61,
            'calorias' => 546,
            'proteinas' => 4.9,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

            DB::table('alimentos')->insert([
            'nome' => 'yogurte',
            'qtd_carboidratos' => 3.6,
            'calorias' => 59,
            'proteinas' => 10,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

            DB::table('alimentos')->insert([
            'nome' => 'sobremesa',
            'qtd_carboidratos' => 99,
            'calorias' => 383,
            'proteinas' => 0,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

    }
}
