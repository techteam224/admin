<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('roles')->truncate();
        DB::table('roles')->insert(
        [
            'role' => 'Administrator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1
        ],
        [
            'role' => 'Manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1
        ],
        [
            'role' => 'Staff',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
