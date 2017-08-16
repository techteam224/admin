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
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'The Think Tub',
            'email' => 'techteam224@gmail.com',
            'password' => bcrypt('lonewolf'),
            'role' => 1,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
