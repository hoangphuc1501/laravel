<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('categories')->insert([
            // ['name' => 'Thể thao','slug' => 'the-thao','show_at_nav' => 1, 'status' => 1],
            // ['name' => 'Giải trí','slug' => 'giai-tri','show_at_nav' => 1, 'status' => 1],
            // ['name' => 'Công nghệ','slug' => 'cong-nghe','show_at_nav' => 1, 'status' => 1],
            // ['name' => 'Du lịch','slug' => 'du-lich','show_at_nav' => 1, 'status' => 1],
            // ['name' => 'Thời sự','slug' => 'thoi-su','show_at_nav' => 1, 'status' => 1],
        ]);
    }
}
