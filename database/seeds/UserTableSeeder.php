<?php
/**
 * Created by PhpStorm.
 * User: ricardofacincani
 * Date: 27/01/17
 * Time: 13:24
 */

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    public function run() {

        User::create(array(
            'name' => 'Admin',
            'email' => 'ricardo.facincani@gmail.com',
            'password' => bcrypt('admin'));
    }
}


    