<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \DB::table('users')->insert([
            'name' => 'Nguyễn Quang Sang', 'email' => 'quang.sang1530@gmail.com',
            'password' => bcrypt('hunhi1310'), 'idgroup' => 1, 'diachi' => 'TPHCM'
        ]);
        \DB::table('users')->insert([
            'name' => 'Hoàng Uyển Nhi', 'email' => 'hunhi1310@gmail.com',
            'password' => bcrypt('hunhi1310'), 'idgroup' => 1, 'diachi' => 'NA'
        ]);
        \DB::table('users')->insert([
            'name' => 'Đặng Phượng Tiên', 'email' => 'tientp1@gmail.com',
            'password' => bcrypt('hunhi1310'), 'idgroup' => 0, 'diachi' => 'HN'
        ]);
    }
}
