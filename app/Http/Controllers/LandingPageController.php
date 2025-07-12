<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class LandingPageController extends Controller
{
    public function index()
    {
        $features = [
            [
                'icon' => '/assets/icons/paid-media.svg',
                'title' => 'Paid Media',
                'desc' => 'Maximize your ROI with targeted ad campaigns.',
            ],
            [
                'icon' => '/assets/icons/seo-optimization.svg',
                'title' => 'SEO Optimization',
                'desc' => 'Boost your organic rankings and drive traffic.',
            ],
            [
                'icon' => '/assets/icons/social-media.svg',
                'title' => 'Social Media Marketing',
                'desc' => 'Engage your audience and build brand loyalty.',
            ],
            [
                'icon' => '/assets/icons/data-analytics.svg',
                'title' => 'Data Analytics',
                'desc' => 'Gain insights and optimize your marketing strategies.',
            ],
            [
                'icon' => '/assets/icons/content-marketing.svg',
                'title' => 'Content Marketing',
                'desc' => 'Create compelling content that converts visitors into customers.',
            ],
            [
                'icon' => '/assets/icons/email-marketing.svg',
                'title' => 'Email Marketing',
                'desc' => 'Build customer relationships and drive repeat business.',
            ],
        ];

        return Inertia::render(
            'LandingPage',
            [
                'features' => $features,
            ]
        );
    }
}


