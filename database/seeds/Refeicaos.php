<?php

 use Illuminate\Database\Seeder;
  use Illuminate\Database\Eloquent\Model;

class Refeicaos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-29',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 149.8,
              'total_calorias' => 1332,
              'total_proteinas' => 170.4,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-29',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 176.2,
              'total_calorias' => 504,
              'total_proteinas' => 6.4,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-29',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 36.6,
              'total_calorias' => 309,
              'total_proteinas' => 11.5,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-28',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 149.8,
              'total_calorias' => 1332,
              'total_proteinas' => 170.4,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-28',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 176.2,
              'total_calorias' => 504,
              'total_proteinas' => 6.4,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-28',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 36.6,
              'total_calorias' => 309,
              'total_proteinas' => 11.5,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-29',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 170,
              'total_calorias' => 1722,
              'total_proteinas' => 14.2,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-29',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 63.3,
              'total_calorias' => 687,
              'total_proteinas' => 28.6,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-29',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 186,
              'total_calorias' => 1749,
              'total_proteinas' => 5.9,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-29',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 149.3,
              'total_calorias' => 1054,
              'total_proteinas' => 16,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

 DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-28',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 170,
              'total_calorias' => 1722,
              'total_proteinas' => 14.2,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-28',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 63.3,
              'total_calorias' => 687,
              'total_proteinas' => 28.6,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-28',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 186,
              'total_calorias' => 1749,
              'total_proteinas' => 5.9,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-28',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 149.3,
              'total_calorias' => 1054,
              'total_proteinas' => 16,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);


        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-29',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 153,
              'total_calorias' => 748,
              'total_proteinas' => 326.9,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-29',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 243.2,
              'total_calorias' => 1583,
              'total_proteinas' => 34,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-29',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 189,
              'total_calorias' => 1554,
              'total_proteinas' => 178.9,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-29',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 107.1,
              'total_calorias' => 1070,
              'total_proteinas' => 40.3,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-28',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 153,
              'total_calorias' => 748,
              'total_proteinas' => 326.9,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-28',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 243.2,
              'total_calorias' => 1583,
              'total_proteinas' => 34,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-28',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 189,
              'total_calorias' => 1554,
              'total_proteinas' => 178.9,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-28',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 107.1,
              'total_calorias' => 1070,
              'total_proteinas' => 40.3,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);


        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-29',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 130,
              'total_calorias' => 1210,
              'total_proteinas' => 29.8,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-29',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 156.6,
              'total_calorias' => 405,
              'total_proteinas' =>19.8,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-29',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 246,
              'total_calorias' => 1299,
              'total_proteinas' => 37.1,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-29',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 266.8,
              'total_calorias' => 1558,
              'total_proteinas' => 5.2,
              'created_at' => '2016-05-29 15:51:03',
              'updated_at' => '2016-05-29 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-28',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 130,
              'total_calorias' => 1210,
              'total_proteinas' => 29.8,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-282 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-28',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 156.6,
              'total_calorias' => 405,
              'total_proteinas' =>19.8,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-28',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 246,
              'total_calorias' => 1299,
              'total_proteinas' => 37.1,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-28',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 266.8,
              'total_calorias' => 1558,
              'total_proteinas' => 5.2,
              'created_at' => '2016-05-28 15:51:03',
              'updated_at' => '2016-05-28 15:51:03'
            ]);


DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-27',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 149.8,
              'total_calorias' => 1332,
              'total_proteinas' => 170.4,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-27',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 176.2,
              'total_calorias' => 504,
              'total_proteinas' => 6.4,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-27',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 36.6,
              'total_calorias' => 309,
              'total_proteinas' => 11.5,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-30',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 149.8,
              'total_calorias' => 1332,
              'total_proteinas' => 170.4,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-30',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 176.2,
              'total_calorias' => 504,
              'total_proteinas' => 6.4,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-30',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 36.6,
              'total_calorias' => 309,
              'total_proteinas' => 11.5,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-27',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 170,
              'total_calorias' => 1722,
              'total_proteinas' => 14.2,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-27',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 63.3,
              'total_calorias' => 687,
              'total_proteinas' => 28.6,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-27',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 186,
              'total_calorias' => 1749,
              'total_proteinas' => 5.9,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-27',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 149.3,
              'total_calorias' => 1054,
              'total_proteinas' => 16,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

 DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-30',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 170,
              'total_calorias' => 1722,
              'total_proteinas' => 14.2,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-30',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 63.3,
              'total_calorias' => 687,
              'total_proteinas' => 28.6,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-30',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 186,
              'total_calorias' => 1749,
              'total_proteinas' => 5.9,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 5,
              'data' => '2016-05-30',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 149.3,
              'total_calorias' => 1054,
              'total_proteinas' => 16,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);


        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-27',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 153,
              'total_calorias' => 748,
              'total_proteinas' => 326.9,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-27',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 243.2,
              'total_calorias' => 1583,
              'total_proteinas' => 34,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-27',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 189,
              'total_calorias' => 1554,
              'total_proteinas' => 178.9,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-27',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 107.1,
              'total_calorias' => 1070,
              'total_proteinas' => 40.3,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-30',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 153,
              'total_calorias' => 748,
              'total_proteinas' => 326.9,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-30',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 243.2,
              'total_calorias' => 1583,
              'total_proteinas' => 34,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-30',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 189,
              'total_calorias' => 1554,
              'total_proteinas' => 178.9,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 6,
              'data' => '2016-05-30',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 107.1,
              'total_calorias' => 1070,
              'total_proteinas' => 40.3,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);


        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-27',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 130,
              'total_calorias' => 1210,
              'total_proteinas' => 29.8,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-27',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 156.6,
              'total_calorias' => 405,
              'total_proteinas' =>19.8,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-27',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 246,
              'total_calorias' => 1299,
              'total_proteinas' => 37.1,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-27',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 266.8,
              'total_calorias' => 1558,
              'total_proteinas' => 5.2,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-30',
              'refeicao' => 'Peq Almoco',
              'total_carboidratos' => 130,
              'total_calorias' => 1210,
              'total_proteinas' => 29.8,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);
        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-30',
              'refeicao' => 'Almoco',
              'total_carboidratos' => 156.6,
              'total_calorias' => 405,
              'total_proteinas' =>19.8,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 7,
              'data' => '2016-05-30',
              'refeicao' => 'Lanche',
              'total_carboidratos' => 246,
              'total_calorias' => 1299,
              'total_proteinas' => 37.1,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);

        DB::table('refeicaos')->insert([
              'user_id' => 4,
              'data' => '2016-05-30',
              'refeicao' => 'Jantar',
              'total_carboidratos' => 266.8,
              'total_calorias' => 1558,
              'total_proteinas' => 5.2,
              'created_at' => '2016-05-30 15:51:03',
              'updated_at' => '2016-05-30 15:51:03'
            ]);


         }
}


