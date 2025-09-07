<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tool;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Tool::get()->count()==0)
        {
            Tool::create(['name'=>'مته سوراخکاری', 'brand_id'=>1, 'model'=>'نوک الماسی', 'unit_id'=>8,  'description'=>'قابلیت تیز شدن چندباره', 'thumbnail'=>'']);
        }  
    }
}
