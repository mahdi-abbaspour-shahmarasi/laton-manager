<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operator;
class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         if(Operator::get()->count()==0)
        {
            Operator::create(['name'=>'مهدی',  
                        'family'=>'عباسپور شاهمرسی', 
                        'phone'=>'09148153324', 
                        'email'=>'mahdi.abbaspour.sh@gmail.com', 
                        'token'=>'123',
                        'thumbnail'=>'', 
                        'status'=>0, 
                        'login_status'=>0, 
                        'station_id'=>1,
                        ]);
        }    
    }
}
