<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Transaction::get()->count()==0)
        {
            $type=['دریافت','تحویل'];
            foreach($type as $item)
            {
                Transaction::create(['name'=>$item]);
            }     
        } 
    }
}
