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
            'foto' => 'img/mobil/1716400376_avanza.jpg',
            'harga' => 200000,
            'deskripsi' => 'Mobil Avanza adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xenia',
            'foto' => 'img/mobil/1716402901_xenia.jpg',
            'harga' => 250000,
            'deskripsi' => 'Mobil Xenia adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Innova',
            'foto' => 'img/mobil/1716401294_innova.jpg',
            'harga' => 300000,
            'deskripsi' => 'Mobil Innova adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Ertiga',
            'foto' => 'img/mobil/1716402217_ertiga.jpg',
            'harga' => 150000,
            'deskripsi' => 'Mobil Ertiga adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xpander',
            'foto' => 'img/mobil/1716401031_xpander.png',
            'harga' => 350000,
            'deskripsi' => 'Mobil Xpander adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Pajero',
            'foto' => 'img/mobil/1716400916_pajero.jpg',
            'harga' => 400000,
            'deskripsi' => 'Mobil Pajero adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Fortuner',
            'foto' => 'img/mobil/1716400827_fortuner.jpg',
            'harga' => 450000,
            'deskripsi' => 'Mobil Fortuner adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Alphard',
            'foto' => 'img/mobil/1716400362_alphard.jpg',
            'harga' => 500000,
            'deskripsi' => 'Mobil Alphard adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Vellfire',
            'foto' => 'img/mobil/1716400996_vellfire.jpeg',
            'harga' => 550000,
            'deskripsi' => 'Mobil Vellfire adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Jazz',
            'foto' => 'img/mobil/1716403404_jazz.jpg',
            'harga' => 100000,
            'deskripsi' => 'Mobil Jazz adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Yaris',
            'foto' => 'img/mobil/1716398918_yaris2.jpg',
            'harga' => 120000,
            'deskripsi' => 'Mobil Yaris adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Agya',
            'foto' => 'img/mobil/1716400338_agya.jpg',
            'harga' => 80000,
            'deskripsi' => 'Mobil Agya adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Brio',
            'foto' => 'img/mobil/1716400732_brio.jpg',
            'harga' => 90000,
            'deskripsi' => 'Mobil Brio adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Rush',
            'foto' => 'img/mobil/1716400956_rush.jpg',
            'harga' => 110000,
            'deskripsi' => 'Mobil Rush adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Terios',
            'foto' => 'img/mobil/1716400976_terios.jpg',
            'harga' => 130000,
            'deskripsi' => 'Mobil Terios adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'HRV',
            'foto' => 'img/mobil/1716400842_hrv.jpg',
            'harga' => 140000,
            'deskripsi' => 'Mobil HRV adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'CRV',
            'foto' => 'img/mobil/1716400788_crv.jpg',
            'harga' => 160000,
            'deskripsi' => 'Mobil CRV adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xtrail',
            'foto' => 'img/mobil/1716403872_xtrail.jpg',
            'harga' => 180000,
            'deskripsi' => 'Mobil Xtrail adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Pajero Sport',
            'foto' => 'img/mobil/1716400937_pajero-sport.jpg',
            'harga' => 220000,
            'deskripsi' => 'Mobil Pajero Sport adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Outlander',
            'foto' => 'img/mobil/1716400305_outlander.jpg',
            'harga' => 240000,
            'deskripsi' => 'Mobil Outlander adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);
    }
}
