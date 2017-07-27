<?php

use Illuminate\Database\Seeder;

class AdminUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->insert([
            'name' => 'The Think Tub',
            'email' => 'techteam224@gmail.com',
            'password' => bcrypt('lonewolf'),
            'role' => 1,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
<<<<<<< HEAD
=======

>>>>>>> 17f4351016032afd785c516d370be6a6d39ebec6
    }
}
