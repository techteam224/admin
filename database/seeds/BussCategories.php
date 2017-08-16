<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BussCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
		DB::table('busscategories')->truncate();
		$records = [
			[ 
				'id' =>1000,
				'category' => 'Arts, crafts, and collectibles',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],

			[
				'id' =>1001,
				'category' => 'Baby',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1002,
				 'category' => 'Beauty and fragrances',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1003,
				 'category' => 'Books and magazines',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1004,
				 'category' => 'Business to business',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1005,
				 'category' => 'Clothing, accessories, and shoes',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1006,
				 'category' => 'Computers, accessories, and services',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1007,
				 'category' => 'Education',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1008,
				 'category' => 'Electronics and telecom',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1009,
				 'category' => 'Entertainment and media',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1010,
				 'category' => 'Financial services and products',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1011,
				 'category' => 'Food retail and service',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1012,
				 'category' => 'Gifts and flowers',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1013,
				 'category' => 'Government',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1014,
				 'category' => 'Health and personal care',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1015,
				 'category' => 'Home and garden',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1016,
				 'category' => 'Nonprofit',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1017,
				 'category' => 'Pets and animals',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1018,
				 'category' => 'Religion and spirituality (for profit)',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1019,
				 'category' => 'Retail (not elsewhere classified)',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1020,
				 'category' => 'Services - other',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1021,
				 'category' => 'Sports and outdoors',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1022,
				 'category' => 'Toys and hobbies',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1023,
				 'category' => 'Travel',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1024,
				 'category' => 'Vehicle sales',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			],
			[ 
				'id' =>1025,
				 'category' => 'Vehicle service and accessories',
				'created_at' => Carbon::now(), 
				'updated_at' => Carbon::now(), 
				'created_by' => 1, 
				'updated_by' => 1
			]
		];
		foreach($records as $r){
			DB::table('busscategories')->insert($r);
		}
		DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
