  <?php

   use Illuminate\Database\Seeder;
    use Illuminate\Database\Eloquent\Model;

  class RefAlimentos extends Seeder
  {
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
          Model::unguard();


              DB::table('ref_alimentos')->insert([
                'refeicao_id' => 1,
                'alimento_id' => 8,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

               DB::table('ref_alimentos')->insert([
                'refeicao_id' => 1,
                'alimento_id' => 7,
                'qtd' => 7,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                DB::table('ref_alimentos')->insert([
                'refeicao_id' => 3,
                'alimento_id' => 2,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                 DB::table('ref_alimentos')->insert([
                'refeicao_id' => 2,
                'alimento_id' => 4,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);
                  DB::table('ref_alimentos')->insert([
                'refeicao_id' => 4,
                'alimento_id' => 9,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                   DB::table('ref_alimentos')->insert([
                'refeicao_id' => 5,
                'alimento_id' => 9,
                'qtd' => 10,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

              DB::table('ref_alimentos')->insert([
                'refeicao_id' => 6,
                'alimento_id' => 6,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

               DB::table('ref_alimentos')->insert([
                'refeicao_id' => 6,
                'alimento_id' => 5,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                DB::table('ref_alimentos')->insert([
                'refeicao_id' => 7,
                'alimento_id' => 10,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                 DB::table('ref_alimentos')->insert([
                'refeicao_id' => 7,
                'alimento_id' => 12,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);
                  DB::table('ref_alimentos')->insert([
                'refeicao_id' => 8,
                'alimento_id' => 4,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                   DB::table('ref_alimentos')->insert([
                'refeicao_id' => 8,
                'alimento_id' => 8,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);
                    DB::table('ref_alimentos')->insert([
                'refeicao_id' => 9,
                'alimento_id' => 1,
                'qtd' => 12,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);
                     DB::table('ref_alimentos')->insert([
                'refeicao_id' => 9,
                'alimento_id' => 10,
                'qtd' => 11,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                      DB::table('ref_alimentos')->insert([
                'refeicao_id' => 10,
                'alimento_id' => 4,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                       DB::table('ref_alimentos')->insert([
                'refeicao_id' => 11,
                'alimento_id' => 8,
                'qtd' => 3,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

               DB::table('ref_alimentos')->insert([
                'refeicao_id' => 11,
                'alimento_id' => 7,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                DB::table('ref_alimentos')->insert([
                'refeicao_id' => 12,
                'alimento_id' => 1,
                'qtd' => 3,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                 DB::table('ref_alimentos')->insert([
                'refeicao_id' => 12,
                'alimento_id' => 5,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                  DB::table('ref_alimentos')->insert([
                'refeicao_id' => 13,
                'alimento_id' => 11,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                   DB::table('ref_alimentos')->insert([
                'refeicao_id' => 13,
                'alimento_id' => 10,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                    DB::table('ref_alimentos')->insert([
                'refeicao_id' => 14,
                'alimento_id' => 3,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                     DB::table('ref_alimentos')->insert([
                'refeicao_id' => 14,
                'alimento_id' => 5,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                      DB::table('ref_alimentos')->insert([
                'refeicao_id' => 15,
                'alimento_id' => 8,
                'qtd' => 4,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                       DB::table('ref_alimentos')->insert([
                'refeicao_id' => 15,
                'alimento_id' => 9,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                        DB::table('ref_alimentos')->insert([
                'refeicao_id' => 16,
                'alimento_id' => 12,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                         DB::table('ref_alimentos')->insert([
                'refeicao_id' => 16,
                'alimento_id' => 10,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);


                          DB::table('ref_alimentos')->insert([
                'refeicao_id' => 17,
                'alimento_id' => 8,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

               DB::table('ref_alimentos')->insert([
                'refeicao_id' => 17,
                'alimento_id' => 7,
                'qtd' => 7,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                DB::table('ref_alimentos')->insert([
                'refeicao_id' => 18,
                'alimento_id' => 2,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                 DB::table('ref_alimentos')->insert([
                'refeicao_id' => 18,
                'alimento_id' => 4,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);
                  DB::table('ref_alimentos')->insert([
                'refeicao_id' => 19,
                'alimento_id' => 9,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                   DB::table('ref_alimentos')->insert([
                'refeicao_id' => 19,
                'alimento_id' => 9,
                'qtd' => 10,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

              DB::table('ref_alimentos')->insert([
                'refeicao_id' => 20,
                'alimento_id' => 6,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

               DB::table('ref_alimentos')->insert([
                'refeicao_id' => 21,
                'alimento_id' => 5,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                DB::table('ref_alimentos')->insert([
                'refeicao_id' => 22,
                'alimento_id' => 10,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                 DB::table('ref_alimentos')->insert([
                'refeicao_id' => 22,
                'alimento_id' => 12,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);
                  DB::table('ref_alimentos')->insert([
                'refeicao_id' => 23,
                'alimento_id' => 4,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                   DB::table('ref_alimentos')->insert([
                'refeicao_id' => 24,
                'alimento_id' => 8,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);
                    DB::table('ref_alimentos')->insert([
                'refeicao_id' => 25,
                'alimento_id' => 1,
                'qtd' => 12,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);
                     DB::table('ref_alimentos')->insert([
                'refeicao_id' => 25,
                'alimento_id' => 10,
                'qtd' => 11,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                      DB::table('ref_alimentos')->insert([
                'refeicao_id' => 26,
                'alimento_id' => 4,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                       DB::table('ref_alimentos')->insert([
                'refeicao_id' => 26,
                'alimento_id' => 8,
                'qtd' => 3,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

               DB::table('ref_alimentos')->insert([
                'refeicao_id' => 27,
                'alimento_id' => 7,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                DB::table('ref_alimentos')->insert([
                'refeicao_id' => 27,
                'alimento_id' => 1,
                'qtd' => 3,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                 DB::table('ref_alimentos')->insert([
                'refeicao_id' => 30,
                'alimento_id' => 5,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                  DB::table('ref_alimentos')->insert([
                'refeicao_id' => 28,
                'alimento_id' => 11,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                   DB::table('ref_alimentos')->insert([
                'refeicao_id' => 29,
                'alimento_id' => 10,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                    DB::table('ref_alimentos')->insert([
                'refeicao_id' => 31,
                'alimento_id' => 3,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                     DB::table('ref_alimentos')->insert([
                'refeicao_id' => 32,
                'alimento_id' => 5,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                      DB::table('ref_alimentos')->insert([
                'refeicao_id' => 33,
                'alimento_id' => 8,
                'qtd' => 4,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                       DB::table('ref_alimentos')->insert([
                'refeicao_id' => 34,
                'alimento_id' => 9,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                        DB::table('ref_alimentos')->insert([
                'refeicao_id' => 35,
                'alimento_id' => 12,
                'qtd' => 2,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

                         DB::table('ref_alimentos')->insert([
                'refeicao_id' => 36,
                'alimento_id' => 10,
                'qtd' => 1,
                'created_at' => '2016-05-24 15:51:03',
                'updated_at' => '2016-05-24 15:51:03'
              ]);

  }
}