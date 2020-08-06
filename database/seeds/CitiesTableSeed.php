<?php

use Illuminate\Database\Seeder;

class CitiesTableSeed extends Seeder
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
            ]);
        }
        \Illuminate\Support\Facades\DB::table('cities')->insert($dataArray);
    }
}
