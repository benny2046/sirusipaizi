<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'rsp' => 'Sumatera Barat',
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
            'phone' => '081371008814',
            'role' => 'admin'
        ]);
        DB::table('kamar')->insert(
            [
                'nama_kamar' => 'Kamar Pertama',
                'jumlah_kasur' => '3',
                'status' => 'tersedia',
            ]);
        DB::table('kamar')->insert(
            [
                'nama_kamar' => 'Kamar Kedua',
                'jumlah_kasur' => '3',
                'status' => 'tersedia',
            ]);
        DB::table('kamar')->insert(
            [
                'nama_kamar' => 'Kamar Ketiga',
                'jumlah_kasur' => '3',
                'status' => 'tersedia',
            ]);
        DB::table('kamar')->insert(
            [
                'nama_kamar' => 'Kamar Keempat',
                'jumlah_kasur' => '3',
                'status' => 'tersedia',
            ]);
    }
}
