<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
        $this->call(AlimentoTableSeeder::class);
        $this->call(BebidaTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UtenteTableSeeder::class);
        $this->call(ExercicioTableSeeder::class);
        $this->call(ExercicioDiarios::class);
        $this->call(Refeicaos::class);
        $this->call(RefAlimentos::class);
        $this->call(RefBebidas::class);
        $this->call(RegistoDiarios::class);





    }
}
