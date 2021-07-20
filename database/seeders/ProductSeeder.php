<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            
            [
            'name'=>"Lg 4",
            'price'=>'4000',
            'description'=>"a smart phone!",
            "category"=>"mobile",
            "gallery"=>"https://rukminim1.flixcart.com/image/416/416/mobile/d/a/h/lg-l90-original-imadurqkurrfmffv.jpeg?q=70"
            ],
            [
                'name'=>"iphone",
                'price'=>'40000',
                'description'=>"a smart phone!",
                "category"=>"mobile",
                "gallery"=>"https://rukminim1.flixcart.com/image/416/416/knhsgi80/mobile/6/f/y/w11-lmk310im-lg-original-imag25v8h9uqwd7q.jpeg?q=70"
            ],
            [
                'name'=>"one plus TV ",
                'price'=>'30000',
                'description'=>"a smart tv!",
                "category"=>"TV",
                "gallery"=>"https://rukminim1.flixcart.com/image/416/416/kl2mljk0/refrigerator-new/m/i/v/rr19a241bgs-nl-2-2021-samsung-original-imagy9pyfszpmgwm.jpeg?q=70"
            ],
            [
                'name'=>"LG",
                'price'=>'40000',
                'description'=>"a smart phone!",
                "category"=>"Fridg",
                "gallery"=>"https://rukminim1.flixcart.com/image/416/416/kgiaykw0/mobile/y/n/y/apple-iphone-11-mhda3hn-a-original-imafwqepdb3fxtug.jpeg?q=70"
            ]
    
    
        ] );
    }
}
