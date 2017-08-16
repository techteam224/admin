<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BussTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
		DB::table('busstypes')->truncate();
		$records = [
			[  
			'id' =>2000, 
			'type' => 'Antiques', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2001, 
			'type' => 'Art and craft supplies', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2002, 
			'type' => 'Art dealers and galleries', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2003, 
			'type' => 'Camera and photographic supplies', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2004, 
			'type' => 'Digital art', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2005, 
			'type' => 'Memorabilia', 
			'category' => 100, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2006, 
			'type' => 'Music store (instruments and sheet music)', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2007, 
			'type' => 'Sewing, needlework, and fabrics', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2008, 
			'type' => 'Stamp and coin', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2009, 
			'type' => 'Stationary, printing and writing paper', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2010, 
			'type' => 'Vintage and collectibles', 
			'category' => 1000, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2011, 
			'type' => 'Clothing', 
			'category' => 1001, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2012, 
			'type' => 'Furniture', 
			'category' => 1001, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2013, 
			'type' => 'Baby products (other)', 
			'category' => 1001, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2014, 
			'type' => 'Safety and health', 
			'category' => 1001, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2015, 
			'type' => 'Bath and body', 
			'category' => 1002, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2016, 
			'type' => 'Fragrances and perfumes', 
			'category' => 1002, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2017, 
			'type' => 'Makeup and cosmetics', 
			'category' => 1002, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2018, 
			'type' => 'Audio books', 
			'category' => 1003, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2019, 
			'type' => 'Digital content', 
			'category' => 1003, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2020, 
			'type' => 'Educational and textbooks', 
			'category' => 1003, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2021, 
			'type' => 'Fiction and nonfiction', 
			'category' => 1003, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2022, 
			'type' => 'Magazines', 
			'category' => 1003, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2023, 
			'type' => 'Publishing and printing', 
			'category' => 1003, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2024, 
			'type' => 'Rare and used books', 
			'category' => 1003, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2025, 
			'type' => 'Accounting', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2026, 
			'type' => 'Advertising', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2027, 
			'type' => 'Agricultural', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2028, 
			'type' => 'Architectural, engineering, and surveying services', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2029, 
			'type' => 'Chemicals and allied products', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2030, 
			'type' => 'Commercial photography, art, and graphics', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2031, 
			'type' => 'Construction', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2032, 
			'type' => 'Consulting services', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2033, 
			'type' => 'Educational services', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2034, 
			'type' => 'Equipment rentals and leasing services', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2035, 
			'type' => 'Equipment repair services', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2036, 
			'type' => 'Hiring services', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2037, 
			'type' => 'Industrial and manufacturing supplies', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2038, 
			'type' => 'Mailing lists', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2039, 
			'type' => 'Marketing', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2040, 
			'type' => 'Multi-level marketing', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2041, 
			'type' => 'Office and commercial furniture', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2042, 
			'type' => 'Office supplies and equipment', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2043, 
			'type' => 'Publishing and printing', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2044, 
			'type' => 'Quick copy and reproduction services', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2045, 
			'type' => 'Shipping and packing', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2046, 
			'type' => 'Stenographic and secretarial support services', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2047, 
			'type' => 'Wholesale', 
			'category' => 1004, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2048, 
			'type' => 'Children\'s clothing', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2049, 
			'type' => 'Men\'s clothing', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2050, 
			'type' => 'Women\'s clothing', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2051, 
			'type' => 'Shoes', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2052, 
			'type' => 'Military and civil service uniforms', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2053, 
			'type' => 'Accessories', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2054, 
			'type' => 'Retail (fine jewelry and watches)', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2055, 
			'type' => 'Wholesale (precious stones and metals)', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2056, 
			'type' => 'Fashion jewelry', 
			'category' => 1005, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2057, 
			'type' => 'Computer and data processing services', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2058, 
			'type' => 'Desktops, laptops, and notebooks', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2059, 
			'type' => 'Digital content', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2060, 
			'type' => 'eCommerce services', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2061, 
			'type' => 'Maintenance and repair services', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2062, 
			'type' => 'Monitors and projectors', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2063, 
			'type' => 'Networking', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2064, 
			'type' => 'Online gaming', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2065, 
			'type' => 'Parts and accessories', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2066, 
			'type' => 'Peripherals', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2067, 
			'type' => 'Software', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2068, 
			'type' => 'Training services', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2069, 
			'type' => 'Web hosting and design', 
			'category' => 1006, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2070, 
			'type' => 'Business and secretarial schools', 
			'category' => 1007, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2071, 
			'type' => 'Child daycare services', 
			'category' => 1007, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2072, 
			'type' => 'Colleges and universities', 
			'category' => 1007, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2073, 
			'type' => 'Dance halls, studios, and schools', 
			'category' => 1007, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2074, 
			'type' => 'Elementary and secondary schools', 
			'category' => 1007, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2075, 
			'type' => 'Vocational and trade schools', 
			'category' => 1007, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2076, 
			'type' => 'Cameras, camcorders, and equipment', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2078, 
			'type' => 'Cell phones, PDAs, and pagers', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2079, 
			'type' => 'General electronic accessories', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2080, 
			'type' => 'Home audio', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2081, 
			'type' => 'Home electronics', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2082, 
			'type' => 'Security and surveillance', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2083, 
			'type' => 'Telecommunication equipment and sales', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2084, 
			'type' => 'Telecommunication services', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2085, 
			'type' => 'Telephone cards', 
			'category' => 1008, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2086, 
			'type' => 'Memorabilia', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2087, 
			'type' => 'Movie tickets', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2088, 
			'type' => 'Movies (DVDs, videotapes)', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2089, 
			'type' => 'Music (CDs, cassettes and albums)', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2090, 
			'type' => 'Cable, satellite, and other pay TV and radio', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2091, 
			'type' => 'Adult digital content', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2092, 
			'type' => 'Concert tickets', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2093, 
			'type' => 'Theater tickets', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2094, 
			'type' => 'Toys and games', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2095, 
			'type' => 'Slot machines', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2096, 
			'type' => 'Digital content', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2097, 
			'type' => 'Entertainers', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2098, 
			'type' => 'Gambling', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2099, 
			'type' => 'Online games', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2100, 
			'type' => 'Video games and systems', 
			'category' => 1009, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2101, 
			'type' => 'Accounting', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2102, 
			'type' => 'Collection agency', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2103, 
			'type' => 'Commodities and futures exchange', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2104, 
			'type' => 'Consumer credit reporting agencies', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2105, 
			'type' => 'Debt counseling service', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2106, 
			'type' => 'Credit union', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2107, 
			'type' => 'Currency dealer and currency exchange', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2108, 
			'type' => 'Escrow', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2109, 
			'type' => 'Finance company', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2110, 
			'type' => 'Financial and investment advice', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2111, 
			'type' => 'Insurance (auto and home)', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2112, 
			'type' => 'Insurance (life and annuity)', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2113, 
			'type' => 'Investments (general)', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2114, 
			'type' => 'Money service business', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2115, 
			'type' => 'Mortgage brokers or dealers', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2116, 
			'type' => 'Online gaming currency', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2117, 
			'type' => 'Paycheck lender or cash advance', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2118, 
			'type' => 'Prepaid and stored value cards', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2119, 
			'type' => 'Real estate agent', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2120, 
			'type' => 'Remittance', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2121, 
			'type' => 'Rental property management', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2122, 
			'type' => 'Security brokers and dealers', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2123, 
			'type' => 'Wire transfer and money order', 
			'category' => 1010, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2124, 
			'type' => 'Alcoholic beverages', 
			'category' => 1011, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2125, 
			'type' => 'Catering services', 
			'category' => 1011, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2126, 
			'type' => 'Coffee and tea', 
			'category' => 1011, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2127, 
			'type' => 'Gourmet foods', 
			'category' => 1011, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2128, 
			'type' => 'Specialty and miscellaneous food stores', 
			'category' => 1011, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2129, 
			'type' => 'Restaurant', 
			'category' => 1011, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2130, 
			'type' => 'Tobacco', 
			'category' => 1011, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2131, 
			'type' => 'Vitamins and supplements', 
			'category' => 1011, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2132, 
			'type' => 'Florist', 
			'category' => 1012, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2133, 
			'type' => 'Gift, card, novelty, and souvenir shops', 
			'category' => 1012, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2134, 
			'type' => 'Gourmet foods', 
			'category' => 1012, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2135, 
			'type' => 'Nursery plants and flowers', 
			'category' => 1012, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2136, 
			'type' => 'Party supplies', 
			'category' => 1012, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2137, 
			'type' => 'Government services (not elsewhere classified)', 
			'category' => 1013, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2138, 
			'type' => 'Drugstore (excluding prescription drugs)', 
			'category' => 1014, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2139, 
			'type' => 'Drugstore (including prescription drugs)', 
			'category' => 1014, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2140, 
			'type' => 'Dental care', 
			'category' => 1014, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2141, 
			'type' => 'Medical care', 
			'category' => 1014, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2142, 
			'type' => 'Medical equipment and supplies', 
			'category' => 1014, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2143, 
			'type' => 'Vision care', 
			'category' => 1014, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2144, 
			'type' => 'Vitamins and supplements', 
			'category' => 1014, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2145, 
			'type' => 'Antiques', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2146, 
			'type' => 'Appliances', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2147, 
			'type' => 'Art dealers and galleries', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2148, 
			'type' => 'Bed and bath', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2149, 
			'type' => 'Construction material', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2150, 
			'type' => 'Drapery, window covering, and upholstery', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2151, 
			'type' => 'Exterminating and disinfecting services', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2152, 
			'type' => 'Fireplace, and fireplace screens', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2153, 
			'type' => 'Furniture', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2154, 
			'type' => 'Garden supplies', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2155, 
			'type' => 'Glass, paint, and wallpaper', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2156, 
			'type' => 'Hardware and tools', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2157, 
			'type' => 'Home decor', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2158, 
			'type' => 'Housewares', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2159, 
			'type' => 'Kitchenware', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2160, 
			'type' => 'Landscaping', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2161, 
			'type' => 'Rugs and carpets', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2162, 
			'type' => 'Security and surveillance equipment', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2163, 
			'type' => 'Swimming pools and spas', 
			'category' => 1015, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2164, 
			'type' => 'Charity', 
			'category' => 1016, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2165, 
			'type' => 'Political', 
			'category' => 1016, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2166, 
			'type' => 'Religious', 
			'category' => 1016, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2167, 
			'type' => 'Other', 
			'category' => 1016, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2168, 
			'type' => 'Personal', 
			'category' => 1016, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2169, 
			'type' => 'Educational', 
			'category' => 1016, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2171, 
			'type' => 'Medication and supplements', 
			'category' => 1017, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2172, 
			'type' => 'Pet shops, pet food, and supplies', 
			'category' => 1017, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2173, 
			'type' => 'Specialty or rare pets', 
			'category' => 1017, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2174, 
			'type' => 'Veterinary services', 
			'category' => 1017, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2175, 
			'type' => 'Membership services', 
			'category' => 1018, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2176, 
			'type' => 'Merchandise', 
			'category' => 1018, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2177, 
			'type' => 'Services (not elsewhere classified)', 
			'category' => 1018, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2178, 
			'type' => 'Chemicals and allied products', 
			'category' => 1019, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2179, 
			'type' => 'Department store', 
			'category' => 1019, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2180, 
			'type' => 'Discount store', 
			'category' => 1019, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2181, 
			'type' => 'Durable goods', 
			'category' => 1019, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2182, 
			'type' => 'Non-durable goods', 
			'category' => 1019, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2183, 
			'type' => 'Used and secondhand store', 
			'category' => 1019, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2184, 
			'type' => 'Variety store', 
			'category' => 1019, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2185, 
			'type' => 'Advertising', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2186, 
			'type' => 'Shopping services and buying clubs', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2187, 
			'type' => 'Career services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2188, 
			'type' => 'Carpentry', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2189, 
			'type' => 'Child care services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2190, 
			'type' => 'Cleaning and maintenance', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2191, 
			'type' => 'Commercial photography', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2192, 
			'type' => 'Computer and data processing services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2193, 
			'type' => 'Computer network services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2194, 
			'type' => 'Consulting services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2195, 
			'type' => 'Counseling services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2196, 
			'type' => 'Courier services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2197, 
			'type' => 'Dental care', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2198, 
			'type' => 'eCommerce services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2199, 
			'type' => 'Electrical and small appliance repair', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2200, 
			'type' => 'Entertainment', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2201, 
			'type' => 'Equipment rental and leasing services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2202, 
			'type' => 'Event and wedding planning', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2203, 
			'type' => 'Gambling', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2204, 
			'type' => 'General contractors', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2205, 
			'type' => 'Graphic and commercial design', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2206, 
			'type' => 'Health and beauty spas', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2207, 
			'type' => 'IDs, licenses, and passports', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2208, 
			'type' => 'Importing and exporting', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2209, 
			'type' => 'Information retrieval services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2210, 
			'type' => 'Insurance - auto and home', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2211, 
			'type' => 'Insurance - life and annuity', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2212, 
			'type' => 'Landscaping and horticultural', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2213, 
			'type' => 'Legal services and attorneys', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2214, 
			'type' => 'Local delivery service', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2215, 
			'type' => 'Lottery and contests', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2216, 
			'type' => 'Medical care', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2217, 
			'type' => 'Membership clubs and organizations', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2218, 
			'type' => 'Misc. publishing and printing', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2219, 
			'type' => 'Moving and storage', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2220, 
			'type' => 'Online dating', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2221, 
			'type' => 'Photofinishing', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2222, 
			'type' => 'Photographic studios - portraits', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2223, 
			'type' => 'Protective and security services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2224, 
			'type' => 'Quick copy and reproduction services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2225, 
			'type' => 'Radio, television, and stereo repair', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2226, 
			'type' => 'Real estate agent', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2227, 
			'type' => 'Rental property management', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2228, 
			'type' => 'Reupholstery and furniture repair', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2229, 
			'type' => 'Services (not elsewhere classified)', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2230, 
			'type' => 'Shipping and packing', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2231, 
			'type' => 'Swimming pool services', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2232, 
			'type' => 'Tailors and alterations', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2233, 
			'type' => 'Telecommunication service', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2234, 
			'type' => 'Utilities', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2235, 
			'type' => 'Vision care', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2236, 
			'type' => 'Watch, clock, and jewelry repair', 
			'category' => 1020, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2237, 
			'type' => 'Athletic shoes', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2238, 
			'type' => 'Bicycle shop, service, and repair', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2239, 
			'type' => 'Boating, sailing and accessories', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2240, 
			'type' => 'Camping and outdoors', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2241, 
			'type' => 'Dance halls, studios, and schools', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2242, 
			'type' => 'Exercise and fitness', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2243, 
			'type' => 'Fan gear and memorabilia', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2244, 
			'type' => 'Firearm accessories', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2245, 
			'type' => 'Firearms', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2246, 
			'type' => 'Hunting', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2247, 
			'type' => 'Knives', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2248, 
			'type' => 'Martial arts weapons', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2249, 
			'type' => 'Sport games and toys', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2250, 
			'type' => 'Sporting equipment', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2251, 
			'type' => 'Swimming pools and spas', 
			'category' => 1021, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2252, 
			'type' => 'Arts and crafts', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2253, 
			'type' => 'Camera and photographic supplies', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2254, 
			'type' => 'Hobby, toy, and game shops', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2255, 
			'type' => 'Memorabilia', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2256, 
			'type' => 'Music store - instruments and sheet music', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2257, 
			'type' => 'Stamp and coin', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2258, 
			'type' => 'Stationary, printing, and writing paper', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2259, 
			'type' => 'Vintage and collectibles', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2260, 
			'type' => 'Video games and systems', 
			'category' => 1022, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2261, 
			'type' => 'Airline', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2262, 
			'type' => 'Auto rental', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2263, 
			'type' => 'Bus line', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2264, 
			'type' => 'Cruises', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2265, 
			'type' => 'Lodging and accommodations', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2266, 
			'type' => 'Luggage and leather goods', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2267, 
			'type' => 'Recreational services', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2268, 
			'type' => 'Sporting and recreation camps', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2269, 
			'type' => 'Taxicabs and limousines', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2270, 
			'type' => 'Timeshares', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2271, 
			'type' => 'Tours', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2272, 
			'type' => 'Trailer parks or campgrounds', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2273, 
			'type' => 'Transportation services - other', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2274, 
			'type' => 'Travel agency', 
			'category' => 1023, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2275, 
			'type' => 'Auto dealer - new and used', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2276, 
			'type' => 'Auto dealer - used only', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2277, 
			'type' => 'Aviation', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2278, 
			'type' => 'Boat dealer', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2279, 
			'type' => 'Mobile home dealer', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2280, 
			'type' => 'Motorcycle dealer', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2281, 
			'type' => 'Recreational and utility trailer dealer', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2282, 
			'type' => 'Recreational vehicle dealer', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2283, 
			'type' => 'Vintage and collectibles', 
			'category' => 1024, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2284, 
			'type' => 'New parts and supplies - motor vehicle', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2285, 
			'type' => 'Used parts - motor vehicle', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2286, 
			'type' => 'Audio and video', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2287, 
			'type' => 'Auto body repair and paint', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2288, 
			'type' => 'Auto rental', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2289, 
			'type' => 'Auto service', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2290, 
			'type' => 'Automotive tire supply and service', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2291, 
			'type' => 'Boat rental and leases', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2292, 
			'type' => 'Car wash', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2293, 
			'type' => 'Motor home and recreational vehicle rental', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2294, 
			'type' => 'Tools and equipment', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2295, 
			'type' => 'Towing service', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2296, 
			'type' => 'Truck and utility trailer rental', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			], 
			[  
			'id' =>2297, 
			'type' => 'Accessories', 
			'category' => 1025, 
			'created_at' => Carbon::now(),  
			'updated_at' => Carbon::now(),  
			'created_by' => 1,  
			'updated_by' => 1 
			],
		];
		foreach($records as $r){
			DB::table('busstypes')->insert($r);
		}
		DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
