<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReserveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
        'user_id' => '1',
        'Number_of_people' => '2',
        'check_in_date' => '2021-10-26',
        'check_out_date' => '2021-10-27',
    ];

    DB::table('reservations_')->insert($param);
        //
    }
}
