<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Portfolio::truncate();

        $portfolios = [
            [
                'title' => 'Analysis & Research',
                'category' => 'Marketing',
                'image' => 'frontend/images/service-thumbnail-1-270x300.jpg',
                'order' => 1,
            ],
            [
                'title' => 'Online Marketing',
                'category' => 'Marketing',
                'image' => 'frontend/images/service-thumbnail-2-270x300.jpg',
                'order' => 2,
            ],
            [
                'title' => 'Email Marketing',
                'category' => 'Marketing',
                'image' => 'frontend/images/service-thumbnail-3-270x300.jpg',
                'order' => 3,
            ],
            [
                'title' => 'Public Relations',
                'category' => 'PR',
                'image' => 'frontend/images/service-thumbnail-4-270x300.jpg',
                'order' => 4,
            ],
            [
                'title' => 'Video Production',
                'category' => 'Production',
                'image' => 'frontend/images/service-thumbnail-5-270x300.jpg',
                'order' => 5,
            ],
            [
                'title' => 'Graphic Design',
                'category' => 'Design',
                'image' => 'frontend/images/service-thumbnail-6-270x300.jpg',
                'order' => 6,
            ],
            [
                'title' => 'Strategy',
                'category' => 'Business',
                'image' => 'frontend/images/service-thumbnail-7-270x300.jpg',
                'order' => 7,
            ],
            [
                'title' => 'Branding',
                'category' => 'Design',
                'image' => 'frontend/images/service-thumbnail-8-270x300.jpg',
                'order' => 8,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            \App\Models\Portfolio::create($portfolio);
        }
    }
}
