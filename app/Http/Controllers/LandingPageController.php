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
                'desc' => 'Maximize your ROI with targeted ad campaigns across all platforms.',
            ],
            [
                'icon' => '/assets/icons/seo-optimization.png',
                'title' => 'SEO Optimization',
                'desc' => 'Boost your organic rankings and drive qualified traffic.',
            ],
            [
                'icon' => '/assets/icons/social-media.png',
                'title' => 'Social Media Marketing',
                'desc' => 'Engage your audience and build lasting brand loyalty.',
            ],
            [
                'icon' => '/assets/icons/data-analytics.png',
                'title' => 'Data Analytics',
                'desc' => 'Gain actionable insights to optimize your marketing strategies.',
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
            [
                'icon' => '/assets/icons/affiliate-marketing.png',
                'title' => 'Affiliate Marketing',
                'desc' => 'Expand your reach through strategic partnership networks.',
            ],
            [
                'icon' => '/assets/icons/branding.png',
                'title' => 'Branding & Visual Identity',
                'desc' => 'Build a memorable brand that stands out in the market.',
            ],
            [
                'icon' => '/assets/icons/influencer-marketing.png',
                'title' => 'Influencer Marketing',
                'desc' => 'Leverage influential voices to amplify your brand message.',
            ],
        ];

        $kpis = [
            [
                'icon' => '📈',
                'value' => '300%',
                'label' => 'Average ROI Increase'
            ],
            [
                'icon' => '🎯',
                'value' => '85%',
                'label' => 'Player Retention Rate'
            ],
            [
                'icon' => '💰',
                'value' => '$2.5M+',
                'label' => 'Revenue Generated'
            ],
        ];

        $teamMembers = [
            [
                'name' => 'Sarah Johnson',
                'role' => 'Marketing Director',
                'photo' => '/assets/team/sarah-johnson.jpg'
            ],
            [
                'name' => 'Michael Chen',
                'role' => 'Data Analyst',
                'photo' => '/assets/team/michael-chen.jpg'
            ],
            [
                'name' => 'Emma Rodriguez',
                'role' => 'Creative Director',
                'photo' => '/assets/team/emma-rodriguez.jpg'
            ],
        ];

        $blogPosts = [
            [
                'title' => 'The Future of iGaming Marketing',
                'desc' => 'Explore emerging trends and technologies shaping the industry.',
            ],
            [
                'title' => 'Data-Driven Player Acquisition',
                'desc' => 'How to use analytics to optimize your acquisition funnel.',
            ],
            [
                'title' => 'Building Brand Loyalty in iGaming',
                'desc' => 'Strategies for creating lasting relationships with players.',
            ],
        ];

        $caseStudies = [
            [
                'title' => 'iGaming Startup Success',
                'description' => 'How we helped a new operator achieve 200% growth in 6 months.',
                'image' => '/assets/case-studies/startup-success.jpg',
                'metrics' => ['200% Growth', '6 Months', '$1M Revenue']
            ],
            [
                'title' => 'Brand Transformation',
                'description' => 'Complete rebrand that increased player engagement by 150%.',
                'image' => '/assets/case-studies/brand-transformation.jpg',
                'metrics' => ['150% Engagement', '3 Months', 'Full Rebrand']
            ],
            [
                'title' => 'Multi-Channel Campaign',
                'description' => 'Integrated marketing approach that tripled conversion rates.',
                'image' => '/assets/case-studies/multi-channel.jpg',
                'metrics' => ['300% Conversion', '4 Months', '5 Channels']
            ],
        ];

        return Inertia::render(
            'LandingPage',
            [
                'features' => $features,
                'kpis' => $kpis,
                'teamMembers' => $teamMembers,
                'blogPosts' => $blogPosts,
                'caseStudies' => $caseStudies,
            ]
        );
    }
}

