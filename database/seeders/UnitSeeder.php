<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list=['گرم','کیلوگرم','تن','میلی متر', 'سانتی متر', 'متر', 'کیلومتر', 'عدد'];
        if(Unit::latest()->count()==0)
        {
            foreach($list as $item)
            {            
                Unit::create(['name'=>$item]);
            }
        }  
    }
}
