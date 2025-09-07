<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SupplierTool;

class SupplierToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(SupplierTool::get()->count()==0)
        {
            SupplierTool::create(['supplier_id'=>1, 'tool_id'=>1]);            
        }
    }
}
