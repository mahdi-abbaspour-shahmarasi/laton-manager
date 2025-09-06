<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Station;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Station::get()->count()==0)
        {
            $type=['ایستگاه شماره 1','ایستگاه شماره 2', 'ایستگاه شماره 3'];
            foreach($type as $item)
            {
                Station::create(['name'=>$item]);
            }
        }
    }
}
