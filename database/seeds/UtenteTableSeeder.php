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
            'user_id' => 4,
            'fullname' => 'uJoao carvalho',
            'gender' => 'm',
            'medico_id' => 1,
            'type' => 'type1',
            'treatmenttype' => 'oral',
            'weight' => 78,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('utentes')->insert([
            'user_id' => 5,
            'fullname' => 'ujose freitas',
            'gender' => 'm',
            'medico_id' => 2,
            'type' => 'type2',
            'treatmenttype' => 'injection',
            'weight' => 89,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('utentes')->insert([
            'user_id' => 6,
            'fullname' => 'uMarinho magalhaes',
            'gender' => 'm',
            'medico_id' => 3,
            'type' => 'type2',
            'treatmenttype' => 'injection',
            'weight' => 90,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('utentes')->insert([
            'user_id' => 7,
            'fullname' => 'uMaria teixeira',
            'gender' => 'f',
            'medico_id' => 2,
            'type' => 'type1',
            'treatmenttype' => 'oral',
            'weight' => 53,
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

    }
}