<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Nino Caca',
                'role' => 'Founder & CEO',
                'image' => 'team-1-370x368.jpg',
                'facebook' => '#',
                'twitter' => '#',
                'instagram' => '#',
                'linkedin' => '#',
                'youtube' => '#',
                'description' => 'Visionary leader with a passion for web development and creative solutions.'
            ],
            [
                'name' => 'Priya',
                'role' => 'Lead Developer',
                'image' => 'team-2-370x368.jpg',
                'facebook' => '#',
                'twitter' => '#',
                'instagram' => '#',
                'github' => '#',
                'linkedin' => '#',
                'youtube' => '#',
                'description' => 'Expert in Laravel and modern frontend technologies.'
            ],
            [
                'name' => 'Ahmad',
                'role' => 'UI/UX Designer',
                'image' => 'team-3-370x368.jpg',
                'instagram' => '#',
                'linkedin' => '#',
                'youtube' => '#',
                'description' => 'Creative designer focusing on user experience and beautiful interfaces.'
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
