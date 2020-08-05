<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray=[];
        for($i=0;$i<10;$i++)
        {
            array_push($dataArray,[
               'name' => Str::random(10),
                'dob' => date("Y-m-d",mt_rand(1,time())),
                'email' => Str::random(10).'@gmail.com',
            ]);
        }
        \Illuminate\Support\Facades\DB::table('customer')->insert($dataArray);
    }
}
