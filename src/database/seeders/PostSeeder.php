<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = \App\Models\User::role('admin')->first() ?? \App\Models\User::first();

        \App\Models\Post::updateOrCreate(
            ['slug' => '10-digital-marketing-mistakes-to-avoid'],
            [
                'title' => '10 Digital Marketing Mistakes to Avoid',
                'content' => 'Though managing your digital marketing campaign may seem easy, you can encounter some complexities, which usually lead to mistakes and a bad promotion effect.',
                'author_id' => $admin->id,
                'category' => 'News',
                'published_at' => now(),
            ]
        );

        \App\Models\Post::updateOrCreate(
            ['slug' => 'where-marketers-need-to-succeed'],
            [
                'title' => 'Where Marketers Need to Succeed',
                'content' => 'Being a successful marketer today might appear to require a never-ending list of skills. Where do you need to excel -- content creation, social media, web analytics, or all of the above?',
                'author_id' => $admin->id,
                'category' => 'News',
                'published_at' => now(),
            ]
        );
    }
}
