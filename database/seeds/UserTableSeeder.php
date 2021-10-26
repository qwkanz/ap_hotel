<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'name' => 'taro',
            'add' => '999-99 Miyake-cho,Nara',
            'tel' => '0742-00-0000',

        ];
        DB::table('user')->insert($param);

        $param =[
            'name' => 'sachiko',
            'add' => '999-99 -cho,Nara',
            'tel' => '0742-00-0000',

        ];
        DB::table('user')->insert($param);
        //
    }
}
