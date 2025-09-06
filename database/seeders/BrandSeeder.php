<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list=['Bosh'];
        if(Brand::latest()->count()==0)
        {
            foreach($list as $item)
            {            
                Brand::create(['name'=>$item]);
            }
        }  
    }
}
