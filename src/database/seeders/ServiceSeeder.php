<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Service::create([
            'title' => 'Pembuatan Website UMKM',
            'description' => 'Solusi website profesional dan responsif khusus untuk pelaku UMKM agar bisnis Anda semakin dikenal luas.',
            'icon_class' => 'fl-bigmug-line-store10',
            'order' => 1,
            'is_active' => true,
        ]);

        \App\Models\Service::create([
            'title' => 'Laravel Custom Build',
            'description' => 'Membangun sistem aplikasi web kustom menggunakan framework Laravel yang handal, aman, dan mudah dikelola.',
            'icon_class' => 'fl-bigmug-line-equalization3',
            'order' => 2,
            'is_active' => true,
        ]);

        \App\Models\Service::create([
            'title' => 'Website Maintenance',
            'description' => 'Layanan pemeliharaan website rutin untuk memastikan performa website Anda selalu optimal dan aman dari gangguan.',
            'icon_class' => 'fl-bigmug-line-square160',
            'order' => 3,
            'is_active' => true,
        ]);
        
        \App\Models\Service::create([
            'title' => 'Optimasi SEO & Performa',
            'description' => 'Meningkatkan peringkat website Anda di mesin pencari dan mempercepat waktu muat halaman untuk pengalaman pengguna yang lebih baik.',
            'icon_class' => 'fl-bigmug-line-megaphone11',
            'order' => 4,
            'is_active' => true,
        ]);
    }
}
