<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* User::create(array(
            'name' => 'Admin',
            'email' => 'ricardo.facincani@gmail.com',
            'password' => bcrypt('admin')));
        */
        factory('App\Models\Medicamento', 150)->create();
        factory('App\Models\Aluno',350)->create();
    }

}
