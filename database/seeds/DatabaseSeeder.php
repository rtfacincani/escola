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
        // $this->call(UsersTableSeeder::class);
        //factory('App\Models\Medicamento', 150)->create();
        factory('App\Models\Aluno',350)->create();
    }
}
