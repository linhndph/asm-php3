<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danhmucs')->insert([
            ['tenDanhMuc'=>'Khoa học'],
            ['tenDanhMuc'=>'Giáo dục'],
            ['tenDanhMuc'=>'Thể thao'],
            ['tenDanhMuc'=>'Y tế'],
            ['tenDanhMuc'=>'Du lịch'],
            ['tenDanhMuc'=>'Pháp luật']
        ]);
    }
}
