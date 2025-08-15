<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'The Future of iGaming: Trends Shaping 2025',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'excerpt' => 'Exploring the key trends and technologies that will define the iGaming industry in 2025 and beyond.',
                'slug' => 'future-of-igaming-trends-2025',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(2),
                'tags' => ['iGaming', 'Trends', 'Technology']
            ],
            [
                'title' => 'Maximizing Player Retention Through Data Analytics',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'excerpt' => 'How advanced analytics can help iGaming operators improve player engagement and lifetime value.',
                'slug' => 'maximizing-player-retention-data-analytics',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(5),
                'tags' => ['Analytics', 'Player Retention', 'Data']
            ],
            [
                'title' => 'Mobile-First Strategy: The Key to iGaming Success',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'excerpt' => 'Why mobile optimization is crucial for modern iGaming platforms and how to implement it effectively.',
                'slug' => 'mobile-first-strategy-igaming-success',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(8),
                'tags' => ['Mobile', 'Strategy', 'UX']
            ],
            [
                'title' => 'Regulatory Compliance in the Digital Age',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'excerpt' => 'Navigating the complex regulatory landscape of online gaming with confidence and compliance.',
                'slug' => 'regulatory-compliance-digital-age',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(12),
                'tags' => ['Compliance', 'Regulation', 'Legal']
            ]
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
