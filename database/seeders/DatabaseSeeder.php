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
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Avanza adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xenia',
            'foto' => 'img/mobil/1716402901_xenia.jpg',
            'harga' => 250000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Xenia adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Innova',
            'foto' => 'img/mobil/1716401294_innova.jpg',
            'harga' => 300000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Innova adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Ertiga',
            'foto' => 'img/mobil/1716402217_ertiga.jpg',
            'harga' => 150000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Ertiga adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xpander',
            'foto' => 'img/mobil/1716401031_xpander.png',
            'harga' => 350000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Xpander adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Pajero',
            'foto' => 'img/mobil/1716400916_pajero.jpg',
            'harga' => 400000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Pajero adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Fortuner',
            'foto' => 'img/mobil/1716400827_fortuner.jpg',
            'harga' => 450000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Fortuner adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Alphard',
            'foto' => 'img/mobil/1716400362_alphard.jpg',
            'harga' => 500000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Alphard adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Vellfire',
            'foto' => 'img/mobil/1716400996_vellfire.jpeg',
            'harga' => 550000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Vellfire adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Jazz',
            'foto' => 'img/mobil/1716403404_jazz.jpg',
            'harga' => 100000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Jazz adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Yaris',
            'foto' => 'img/mobil/1716398918_yaris2.jpg',
            'harga' => 120000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Yaris adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Agya',
            'foto' => 'img/mobil/1716400338_agya.jpg',
            'harga' => 80000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Agya adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Brio',
            'foto' => 'img/mobil/1716400732_brio.jpg',
            'harga' => 90000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Brio adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Rush',
            'foto' => 'img/mobil/1716400956_rush.jpg',
            'harga' => 110000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Rush adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Terios',
            'foto' => 'img/mobil/1716400976_terios.jpg',
            'harga' => 130000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Terios adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'HRV',
            'foto' => 'img/mobil/1716400842_hrv.jpg',
            'harga' => 140000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil HRV adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'CRV',
            'foto' => 'img/mobil/1716400788_crv.jpg',
            'harga' => 160000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil CRV adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Xtrail',
            'foto' => 'img/mobil/1716403872_xtrail.jpg',
            'harga' => 180000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Xtrail adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Pajero Sport',
            'foto' => 'img/mobil/1716400937_pajero-sport.jpg',
            'harga' => 220000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Pajero Sport adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        Mobil::create([
            'nama' => 'Outlander',
            'foto' => 'img/mobil/1716400305_outlander.jpg',
            'harga' => 240000,
            'jenis_kendaraan' => 'mobil',
            'deskripsi' => 'Mobil Outlander adalah mobil keluarga yang sangat nyaman untuk perjalanan jauh.',

        ]);

        // motor
        Mobil::create([
            'nama' => 'ninja h2',
            'foto' => 'img/mobil/1717369646_ninja h2.jpg',
            'harga' => '3000000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'ninja h2 menjadi daya tarik tersendiri bagi masyarakat indonesia, karena ke mewahannya ninja h2 dapat meningkatkan tingkat kepercayaan diri anda.',
        ]);

        Mobil::create([
            'nama' => 'supra bapak',
            'foto' => 'img/mobil/1717370008_suprabapak.jpg',
            'harga' => '50000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'rasakan sensasi menyenangkan dengan mengendarai supra bapak dengan sejuta kenangannya.',
        ]);

        Mobil::create([
            'nama' => 'nmax',
            'foto' => 'img/mobil/1717370200_nmax.jpg',
            'harga' => '150000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'Sewa Yamaha NMAX, nyaman dan stylish untuk perjalanan Anda. Harga terjangkau, pesan sekarang dan nikmati perjalanan terbaik!.',
        ]);

        Mobil::create([
            'nama' => 'cb teyeng',
            'foto' => 'img/mobil/1717370268_cb teyeng.jpg',
            'harga' => '50000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'nikmati perjalanan anda dengan menggunakan cb teyeng 1 juta kenangan yang tak akan tergantikan.',
        ]);

        Mobil::create([
            'nama' => 'rx king',
            'foto' => 'img/mobil/1717370361_rx king.png',
            'harga' => '75000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'Sewa Yamaha RX King, motor legendaris dengan performa tangguh. Harga terjangkau, pesan sekarang dan nikmati sensasi berkendara klasik!',
        ]);

        Mobil::create([
            'nama' => 'vario 150',
            'foto' => 'img/mobil/1717370566_vario 150.jpg',
            'harga' => '90000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'Sewa Honda Vario, motor matic yang stylish dan bertenaga. Harga terjangkau, pesan sekarang dan nikmati perjalanan nyaman!.',
        ]);

        Mobil::create([
            'nama' => 'beat',
            'foto' => 'img/mobil/1717370636_beat.jpg',
            'harga' => '85000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'Sewa Honda Beat, motor matic ekonomis dan lincah. Harga terjangkau, pesan sekarang dan rasakan kemudahan berkendara!.',
        ]);

        Mobil::create([
            'nama' => 'mio karbu',
            'foto' => 'img/mobil/1717370688_mio karbu.jpg',
            'harga' => '90000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'Sewa Yamaha Mio Karbu, motor matic klasik dengan konsumsi bahan bakar efisien. Harga terjangkau, pesan sekarang!.',
        ]);

        Mobil::create([
            'nama' => 'vespa matic',
            'foto' => 'img/mobil/1717370748_vesmet.jpg',
            'harga' => '160000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'Sewa Vespa Matic, motor elegan dengan gaya retro modern. Harga terjangkau, pesan sekarang dan berkendara dengan gaya!.',
        ]);

        Mobil::create([
            'nama' => 'vixion',
            'foto' => 'img/mobil/1717370832_vixion.jpg',
            'harga' => '130000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'Sewa Yamaha Vixion, motor sport dengan performa tangguh dan desain sporty. Harga terjangkau, pesan sekarang!.',
        ]);

        Mobil::create([
            'nama' => 'scoopy',
            'foto' => 'img/mobil/1717370880_scoopy.jpg',
            'harga' => '80000',
            'jenis_kendaraan' => 'motor',
            'deskripsi' => 'Sewa Honda Scoopy, motor matic dengan desain unik dan fitur canggih. Harga terjangkau, pesan sekarang dan nikmati perjalanan penuh gaya!',
        ]);
    }
}
