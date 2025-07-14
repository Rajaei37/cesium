<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class LandingPageController extends Controller
{
    public function index()
    {
        $features = [
            [
                'icon' => '/assets/icons/paid-media.png',
                'title' => 'Paid Media',
                'desc' => 'Maximize your ROI with targeted ad campaigns.',
            ],
            [
                'icon' => '/assets/icons/seo-optimization.png',
                'title' => 'SEO Optimization',
                'desc' => 'Boost your organic rankings and drive traffic.',
            ],
            [
                'icon' => '/assets/icons/social-media.png',
                'title' => 'Social Media Marketing',
                'desc' => 'Engage your audience and build brand loyalty.',
            ],
            [
                'icon' => '/assets/icons/data-analytics.png',
                'title' => 'Data Analytics',
                'desc' => 'Gain insights and optimize your marketing strategies.',
            ],
            [
                'icon' => '/assets/icons/content-marketing.png',
                'title' => 'Content Marketing',
                'desc' => 'Create compelling content that converts visitors into customers.',
            ],
            [
                'icon' => '/assets/icons/email-marketing.png',
                'title' => 'Email Marketing',
                'desc' => 'Build customer relationships and drive repeat business.',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Alexandra', 
                'photo' => '/assets/video-testimonials/alexandra-thumbnail.jpg',
                'quote' => 'Cesium Marketing transformed our player acquisition strategy. Their data-driven approach is unmatched!',
                'video_url' => 'https://www.youtube.com/watch?v=your-video-id-alexandra' // Placeholder
            ],
            [
                'name' => 'James Mitchell',
                'photo' => '/assets/testimonials/james-mitchell.jpg',
                'quote' => 'Our LTV has significantly increased thanks to Cesium Marketing. Highly recommend their services.',
            ],
        ];

        $trustBadges = [
            ['src' => '/assets/clients/royal-vegas-logo.png', 'alt' => 'Royal Vegas Logo'],
            ['src' => '/assets/clients/diamond-spins-logo.png', 'alt' => 'Diamond Spins Logo'],
            ['src' => '/assets/clients/lucky-strike-logo.png', 'alt' => 'Lucky Strike Logo'],
        ];

        return Inertia::render(
            'LandingPage',
            [
                'features' => $features,
                'testimonials' => $testimonials,
                'trustBadges' => $trustBadges,
            ]
        );
    }
}


