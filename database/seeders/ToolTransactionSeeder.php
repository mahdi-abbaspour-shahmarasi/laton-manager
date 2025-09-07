<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ToolTransaction;
class ToolTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(ToolTransaction::get()->count()==0)
        {
            ToolTransaction::create(['transaction_id'=>1, 
                          'tool_id'=>1, 
                          'station_id'=>1, 
                          'operator_id'=>1, 
                          'count'=>10,                           
                          'description'=>'']);
        }
    }
}
