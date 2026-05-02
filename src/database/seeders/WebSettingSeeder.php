<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'portfolio_header_subtitle' => 'Showcase',
            'portfolio_header_title' => 'Portofolio',
            'portfolio_header_bg' => 'frontend/images/breadcrumbs-image.jpg',
            'portfolio_about_title' => 'Siapa Kami',
            'portfolio_about_content1' => 'Codekarya adalah wadah kreatif bagi para kreator digital untuk membagikan karya terbaik mereka kepada dunia. Kami fokus pada kualitas dan inovasi dalam setiap karya yang kami hasilkan.',
            'portfolio_about_content2' => 'Dedikasi kami tercermin dalam setiap baris kode, setiap nada musik, dan setiap frame video yang kami buat. Portofolio ini adalah bukti perjalanan kreatif kami.',
            'portfolio_about_image' => 'frontend/images/services-1-570x368.jpg',
            'portfolio_cta_title1' => 'Take the First Step to the',
            'portfolio_cta_title2' => 'Success of Your Company',
            'portfolio_cta_text' => 'Eu labore dolor ad eu voluptate nisi pariatur cillum fugiat est amet elit esse amet pariatur est tempor dolore ea dolor ex est ut voluptate deserunt eu est',
            'portfolio_cta_btn_text' => 'Make an Appointment',
            'portfolio_cta_btn_link' => '#',
            'portfolio_cta_bg' => 'frontend/images/call-to-action-2-1920x584.jpg',
        ];

        foreach ($settings as $key => $value) {
            \App\Models\WebSetting::create([
                'key' => $key,
                'value' => $value,
                'type' => str_contains($key, 'bg') || str_contains($key, 'image') ? 'image' : 'text'
            ]);
        }
    }
}
