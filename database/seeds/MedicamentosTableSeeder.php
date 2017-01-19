<?php

use Illuminate\Database\Seeder;

class MedicamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Medicamento', 100)->create()->each(function ($u) {
            $u->telefones()->save(factory('App\Telefone')->make());
            $u->contratos()->save(factory('App\Contrato')->make());
        });
    }
}
