<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list=['ابزار فروشی شهر'];
        if(Supplier::latest()->count()==0)
        {
            foreach($list as $item)
            {            
                Supplier::create(['name'=>$item]);
            }
        }  
    }
}
