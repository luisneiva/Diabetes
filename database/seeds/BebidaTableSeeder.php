  <?php

  use Illuminate\Database\Seeder;
  use Illuminate\Database\Eloquent\Model;

  class BebidaTableSeeder extends Seeder
  {
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
          Model::unguard();


            DB::table('bebidas')->insert([
              'nome' => 'leite',
              'calorias' => 42,
              'carboidratos' => 42,
              'proteinas' => 151,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

            DB::table('bebidas')->insert([
              'nome' => 'cerveja',
              'calorias' => 43,
              'carboidratos' => 3.6 ,
              'proteinas' => .5,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
            ]);

            DB::table('bebidas')->insert([
              'nome' => 'vinho tinto',
              'calorias' => 83,
              'carboidratos' => 2.7 ,
              'proteinas' => .1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
          ]);

             DB::table('bebidas')->insert([
              'nome' => 'vinho branco',
              'calorias' => 82,
              'carboidratos' => 2.6,
              'proteinas' => .1,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
          ]);

              DB::table('bebidas')->insert([
              'nome' => 'agua',
              'calorias' => 0,
              'carboidratos' => 0,
              'proteinas' => 0,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
          ]);

               DB::table('bebidas')->insert([
              'nome' => 'CocaCola',
              'calorias' => 84,
              'carboidratos' => 37,
              'proteinas' => 0,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
          ]);
               DB::table('bebidas')->insert([
              'nome' => 'sumo',
              'calorias' => 43,
              'carboidratos' => 9.8,
              'proteinas' => 0.5,
              'created_at' => '2016-05-24 15:51:03',
              'updated_at' => '2016-05-24 15:51:03'
          ]);
      }
  }
