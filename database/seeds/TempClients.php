<?php

use Illuminate\Database\Seeder;

class TempClients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('businesses')->truncate();
        DB::table('businesses')->insert([
            'buss_name' => 'Business Name 1',
            'buss_owner_name' => 'Business Owner Name 1',
            'email' =>	'bussemail1@example.com',
            'password' => bcrypt('lonewolf'),
            'role' => 1,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
