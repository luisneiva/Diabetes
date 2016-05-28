 <?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UtenteTableSeeder extends Seeder {
 /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {


       Model::unguard();

         DB::table('utentes')->insert([
            'user_id' => '2',
            'fullname' => 'Antonio MAgalhaes',
            'gender' => 'm',
            'medico_id' => null,
            'type' => 'type1',
            'treatmenttype' => 'oral',
            'weight' => 78,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('utentes')->insert([
            'user_id' => 3,
            'fullname' => 'jose',
            'gender' => 'm',
            'medico_id' => null,
            'type' => 'type2',
            'treatmenttype' => 'injection',
            'weight' => 89,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('utentes')->insert([
            'user_id' => 4,
            'fullname' => 'marinho magalhaes',
            'gender' => 'm',
            'medico_id' => null,
            'type' => 'type2',
            'treatmenttype' => 'injection',
            'weight' => 90,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('utentes')->insert([
            'user_id' => 5,
            'fullname' => 'maria',
            'gender' => 'f',
            'medico_id' => null,
            'type' => 'type1',
            'treatmenttype' => 'oral',
            'weight' => 53,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

    }
}