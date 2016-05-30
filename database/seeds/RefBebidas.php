<?php

 use Illuminate\Database\Seeder;
  use Illuminate\Database\Eloquent\Model;

class RefBebidas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 1,
              'bebida_id' => 1,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 1,
              'bebida_id' => 7,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 2,
              'bebida_id' => 4,
              'qtd' => 2,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 3,
              'bebida_id' => 2,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 4,
              'bebida_id' => 5,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 5,
              'bebida_id' => 5,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 5,
              'bebida_id' => 1,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 6,
              'bebida_id' => 3,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 6,
              'bebida_id' => 2,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 7,
              'bebida_id' => 4,
              'qtd' => 10,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 8,
              'bebida_id' => 3,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 9,
              'bebida_id' => 1,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 10,
              'bebida_id' => 4,
              'qtd' => 2,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 11,
              'bebida_id' => 1,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 12,
              'bebida_id' => 3,
              'qtd' => 3,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 13,
              'bebida_id' => 1,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 14,
              'bebida_id' => 4,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 15,
              'bebida_id' => 6,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 15,
              'bebida_id' => 1,
              'qtd' => 1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);
          DB::table('ref_bebidas')->insert([
              'refeicao_id' => 16,
              'bebida_id' => 4,
              'qtd' => 3,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);



      }
}
