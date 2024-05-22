<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailTransaksi;
use App\Models\Mobil;
use App\Models\Transaksi;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
        ]);

        Mobil::create([
            'nama' => 'Avanza',
            'foto' => 'avanza.jpg',
            'harga' => 200000,
            'deskripsi' => 'Mobil Avanza adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xenia',
            'foto' => 'xenia.jpg',
            'harga' => 250000,
            'deskripsi' => 'Mobil Xenia adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Innova',
            'foto' => 'innova.jpg',
            'harga' => 300000,
            'deskripsi' => 'Mobil Innova adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Ertiga',
            'foto' => 'ertiga.jpg',
            'harga' => 150000,
            'deskripsi' => 'Mobil Ertiga adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xpander',
            'foto' => 'xpander.jpg',
            'harga' => 350000,
            'deskripsi' => 'Mobil Xpander adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Pajero',
            'foto' => 'pajero.jpg',
            'harga' => 400000,
            'deskripsi' => 'Mobil Pajero adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Fortuner',
            'foto' => 'fortuner.jpg',
            'harga' => 450000,
            'deskripsi' => 'Mobil Fortuner adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Alphard',
            'foto' => 'alphard.jpg',
            'harga' => 500000,
            'deskripsi' => 'Mobil Alphard adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Vellfire',
            'foto' => 'vellfire.jpg',
            'harga' => 550000,
            'deskripsi' => 'Mobil Vellfire adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Jazz',
            'foto' => 'jazz.jpg',
            'harga' => 100000,
            'deskripsi' => 'Mobil Jazz adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Yaris',
            'foto' => 'yaris.jpg',
            'harga' => 120000,
            'deskripsi' => 'Mobil Yaris adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Agya',
            'foto' => 'agya.jpg',
            'harga' => 80000,
            'deskripsi' => 'Mobil Agya adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Brio',
            'foto' => 'brio.jpg',
            'harga' => 90000,
            'deskripsi' => 'Mobil Brio adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Rush',
            'foto' => 'rush.jpg',
            'harga' => 110000,
            'deskripsi' => 'Mobil Rush adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Terios',
            'foto' => 'terios.jpg',
            'harga' => 130000,
            'deskripsi' => 'Mobil Terios adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'HRV',
            'foto' => 'hrv.jpg',
            'harga' => 140000,
            'deskripsi' => 'Mobil HRV adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'CRV',
            'foto' => 'crv.jpg',
            'harga' => 160000,
            'deskripsi' => 'Mobil CRV adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xtrail',
            'foto' => 'xtrail.jpg',
            'harga' => 180000,
            'deskripsi' => 'Mobil Xtrail adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Pajero Sport',
            'foto' => 'pajerosport.jpg',
            'harga' => 220000,
            'deskripsi' => 'Mobil Pajero Sport adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Outlander',
            'foto' => 'outlander.jpg',
            'harga' => 240000,
            'deskripsi' => 'Mobil Outlander adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);


    }
}
