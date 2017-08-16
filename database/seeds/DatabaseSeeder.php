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
        $this->pStatus('1) Admin Users ');
        $this->call(AdminUsers::class);

        $this->pStatus('2) Admin Roles ');
        $this->call(AdminRoles::class);

        $this->pStatus('3) Business Categories ');
        $this->call(BussCategories::class);

        $this->pStatus('4) Bussiness Types ');
        $this->call(BussTypes::class);

        //$this->pStatus('4) Temporary Bussiness Subscribers ');
        //$this->call(TempClients::class);
    }

    private function pStatus($value='')
    {
        echo $value;
    }
}
