<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhanCongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phancongs')->insert([
            'id_giaovien'=>'1',
            'id_lophoc'=>'1',
            'id_monhoc'=>'1',
            'ca_day'=> '2, 4, 6',
            'starttime'=>'13:30:00',
            'endtime'=>'15:30:00'
        ]);
        DB::table('phancongs')->insert([
            'id_giaovien'=>'2',
            'id_lophoc'=>'4',
            'id_monhoc'=>'3',
            'ca_day'=> '3, 5, 7',
            'starttime'=>'13:30:00',
            'endtime'=>'17:30:00'
        ]);
        DB::table('phancongs')->insert([
            'id_giaovien'=>'3',
            'id_lophoc'=>'6',
            'id_monhoc'=>'6',
            'ca_day'=> '2, 4, 6',
            'starttime'=>'13:30:00',
            'endtime'=>'15:30:00'
        ]);
        DB::table('phancongs')->insert([
            'id_giaovien'=>'4',
            'id_lophoc'=>'3',
            'id_monhoc'=>'4',
            'ca_day'=> '3, 5, 7',
            'starttime'=>'13:30:00',
            'endtime'=>'17:30:00'
        ]);
        DB::table('phancongs')->insert([
            'id_giaovien'=>'5',
            'id_lophoc'=>'4',
            'id_monhoc'=>'2',
            'ca_day'=> '2, 4, 6',
            'starttime'=>'17:30:00',
            'endtime'=>'19:30:00'
        ]);
        DB::table('phancongs')->insert([
            'id_giaovien'=>'6',
            'id_lophoc'=>'5',
            'id_monhoc'=>'5',
            'ca_day'=> '3, 5, 7',
            'starttime'=>'13:30:00',
            'endtime'=>'17:30:00'
        ]);
        DB::table('phancongs')->insert([
            'id_giaovien'=>'7',
            'id_lophoc'=>'7',
            'id_monhoc'=>'7',
            'ca_day'=> '2, 3, 4, 5, 6, 7',
            'starttime'=>'0:00:00',
            'endtime'=>'23:59:00'
        ]);
    }
}
