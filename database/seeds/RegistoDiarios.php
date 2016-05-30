<?php

 use Illuminate\Database\Seeder;
  use Illuminate\Database\Eloquent\Model;

class RegistoDiarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('registo_diarios')->insert([
              'glicose' => 90,
              'total_carboidratos_ingeridos' => 3,
              'total_proteinas_ingeridas' => 0,
              'total_calorias_ingeridas' => 0,
              'calorias_gastas' => 341,
              'carboidratos_gastos' => 341,
              'proteinas_gastas' => 341,
              'user_id' => 4,
              'created_at' => '2016-05-27 15:51:03',
              'updated_at' => '2016-05-27 15:51:03'
            ]);
         }
}
