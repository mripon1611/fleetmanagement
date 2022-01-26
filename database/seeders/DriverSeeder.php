<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('drivers')->insert([
            'name'=> 'Md. Jasim',
            'name_bn'=> 'মোঃ জসিম',
            'nid'=> '4204251492',
            'lisence'=> '19984204251492',
            'photograp'=> 'https://www.sfu.ca/content/sfu/computing/people/jcr:content/main_content/image_0.img.640.medium.jpg/1542139165566.JPG',
            'isaasigned'=> 'no',
            'start_date'=> '2022-01-26',
            'end_date'=> '',
        ]);
    }
}
