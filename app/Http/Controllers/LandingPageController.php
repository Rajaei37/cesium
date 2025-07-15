<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class LandingPageController extends Controller
{
    public function index()
    {
        $features = [
            [
                'icon' => '/assets/icons/paid-media.png',
                'title' => 'Paid Media',
                'desc' => 'Maximize your ROI with targeted ad campaigns across all platforms.',
                'long_desc' => 'Our paid media strategies are designed to deliver maximum return on investment. We specialize in creating and managing highly targeted campaigns across Google Ads, social media platforms (Facebook, Instagram, X), and programmatic advertising. From keyword research and audience segmentation to ad copy optimization and A/B testing, we ensure every dollar spent drives qualified traffic and conversions. We focus on real-time bidding, performance tracking, and continuous optimization to keep your campaigns efficient and effective, driving new player acquisition and increasing player lifetime value.'
            ],
            [
                'icon' => '/assets/icons/seo-optimization.png',
                'title' => 'SEO Optimization',
                'desc' => 'Boost your organic rankings and drive qualified traffic.',
                'long_desc' => 'Achieve top search engine rankings and attract high-intent organic traffic with our comprehensive SEO services. We conduct in-depth keyword research, technical SEO audits, on-page optimization, and high-quality link building to improve your site’s visibility. Our strategies are tailored to the iGaming industry, focusing on compliance, local SEO, and content strategies that resonate with your target audience. We monitor algorithm changes and competitor strategies to ensure your site remains competitive and continues to grow its organic footprint.'
            ],
            [
                'icon' => '/assets/icons/social-media.png',
                'title' => 'Social Media Marketing',
                'desc' => 'Engage your audience and build lasting brand loyalty.',
                'long_desc' => 'Build a vibrant community and amplify your brand message across all major social media platforms. Our social media marketing services include content creation, community management, paid social campaigns, and influencer collaborations. We develop strategies that foster engagement, drive traffic to your iGaming platform, and convert followers into loyal players. From captivating visuals to interactive campaigns, we ensure your social presence is dynamic, relevant, and aligned with your brand’s voice.'
            ],
            [
                'icon' => '/assets/icons/data-analytics.png',
                'title' => 'Data Analytics',
                'desc' => 'Gain actionable insights to optimize your marketing strategies.',
                'long_desc' => 'Unlock the power of your data with our advanced analytics services. We help you collect, analyze, and interpret complex marketing data to identify trends, measure campaign performance, and uncover actionable insights. Our expertise includes setting up tracking systems, creating custom dashboards, and providing regular performance reports. By understanding player behavior, acquisition costs, and retention rates, we empower you to make informed decisions that optimize your marketing spend and drive sustainable growth.'
            ],
            [
                'icon' => '/assets/icons/content-marketing.png',
                'title' => 'Content Marketing',
                'desc' => 'Create compelling content that converts visitors into customers.',
                'long_desc' => 'Attract, engage, and convert your target audience with high-quality, relevant content. Our content marketing services include strategy development, content creation (blog posts, articles, guides, video scripts), and content distribution. We focus on producing valuable content that addresses the needs and interests of iGaming players, establishes your brand as an industry authority, and drives organic traffic. From SEO-optimized articles to engaging video content, we ensure your message resonates and converts.'
            ],
            [
                'icon' => '/assets/icons/email-marketing.png',
                'title' => 'Email Marketing',
                'desc' => 'Build customer relationships and drive repeat business.',
                'long_desc' => 'Nurture leads and retain players with highly effective email marketing campaigns. We design and implement personalized email strategies, including welcome series, promotional campaigns, re-engagement flows, and VIP programs. Our services cover list segmentation, A/B testing, automation, and performance tracking to maximize open rates, click-through rates, and conversions. We help you build strong, lasting relationships with your players, encouraging repeat play and increasing lifetime value.'
            ],
            [
                'icon' => '/assets/icons/affiliate-marketing.png',
                'title' => 'Affiliate Marketing',
                'desc' => 'Expand your reach through strategic partnership networks.',
                'long_desc' => 'Leverage the power of partnerships with our expert affiliate marketing management. We connect you with a vast network of high-performing affiliates, negotiate favorable commission structures, and provide real-time tracking and transparent reporting. Our team manages all aspects of your affiliate program, from recruitment and activation to optimization and compliance, ensuring you acquire new players efficiently and expand your market reach without upfront advertising costs.'
            ],
            [
                'icon' => '/assets/icons/branding.png',
                'title' => 'Branding & Visual Identity',
                'desc' => 'Build a memorable brand that stands out in the market.',
                'long_desc' => 'Forge a powerful and memorable brand identity that resonates with your target audience and differentiates you in the competitive iGaming landscape. Our branding services include brand strategy development, logo design, visual identity guidelines, and brand messaging. We ensure every touchpoint reflects your brand’s unique personality and values, creating a cohesive and compelling presence that attracts and retains players.'
            ],
            [
                'icon' => '/assets/icons/influencer-marketing.png',
                'title' => 'Influencer Marketing',
                'desc' => 'Leverage influential voices to amplify your brand message.',
                'long_desc' => 'Amplify your brand’s reach and credibility by partnering with key influencers in the iGaming space. Our influencer marketing services cover identifying relevant influencers, campaign strategy and execution, content collaboration, and performance measurement. We help you tap into engaged communities, generate authentic buzz, and drive player acquisition through trusted recommendations and compelling content created by influential voices.'
            ]
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
                'id' => 1,
                'title' => 'The Future of iGaming Marketing: AI and Personalization',
                'desc' => 'Explore how artificial intelligence and machine learning are revolutionizing player acquisition and retention strategies in the iGaming industry.',
                'date' => 'July 10, 2025',
                'author' => 'Sarah Johnson',
                'readTime' => 5,
                'image' => '/assets/blog/ai-igaming-marketing.jpg',
                'tags' => ['AI', 'Personalization', 'Marketing Trends', 'iGaming'],
                'url' => '#'
            ],
            [
                'id' => 2,
                'title' => 'Data-Driven Player Acquisition: Maximizing ROI',
                'desc' => 'Learn how to leverage analytics and data insights to optimize your acquisition funnel and reduce customer acquisition costs.',
                'date' => 'July 8, 2025',
                'author' => 'Michael Chen',
                'readTime' => 7,
                'image' => '/assets/blog/data-driven-acquisition.jpg',
                'tags' => ['Data Analytics', 'ROI', 'Player Acquisition', 'Optimization'],
                'url' => '#'
            ],
            [
                'id' => 3,
                'title' => 'Building Brand Loyalty in the Competitive iGaming Space',
                'desc' => 'Discover proven strategies for creating lasting relationships with players and increasing lifetime value through effective brand building.',
                'date' => 'July 5, 2025',
                'author' => 'Emma Rodriguez',
                'readTime' => 6,
                'image' => '/assets/blog/brand-loyalty-igaming.jpg',
                'tags' => ['Brand Building', 'Player Retention', 'Loyalty Programs', 'LTV'],
                'url' => '#'
            ],
            [
                'id' => 4,
                'title' => 'Regulatory Compliance in iGaming Marketing',
                'desc' => 'Navigate the complex landscape of iGaming regulations while maintaining effective marketing campaigns across different jurisdictions.',
                'date' => 'July 3, 2025',
                'author' => 'David Wilson',
                'readTime' => 8,
                'image' => '/assets/blog/regulatory-compliance.jpg',
                'tags' => ['Compliance', 'Regulations', 'Legal', 'Marketing'],
                'url' => '#'
            ],
            [
                'id' => 5,
                'title' => 'Social Media Strategies for iGaming Brands',
                'desc' => 'Master the art of social media marketing in the iGaming industry with platform-specific strategies and content approaches.',
                'date' => 'June 30, 2025',
                'author' => 'Lisa Thompson',
                'readTime' => 4,
                'image' => '/assets/blog/social-media-strategies.jpg',
                'tags' => ['Social Media', 'Content Marketing', 'Engagement', 'Branding'],
                'url' => '#'
            ],
            [
                'id' => 6,
                'title' => 'The Rise of Mobile Gaming: Marketing Implications',
                'desc' => 'Understand how the mobile gaming revolution is reshaping marketing strategies and player behavior in the iGaming sector.',
                'date' => 'June 28, 2025',
                'author' => 'Alex Martinez',
                'readTime' => 6,
                'image' => '/assets/blog/mobile-gaming-marketing.jpg',
                'tags' => ['Mobile Gaming', 'User Experience', 'Mobile Marketing', 'Trends'],
                'url' => '#'
            ]
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
            ]
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



    public function contact(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            // Log the contact form submission
            Log::info('Contact form submission', [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'message' => substr($validated['message'], 0, 100) . '...',
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'timestamp' => now()
            ]);

            // In a production environment, you would send an email here
            // For now, we'll just log it and return a success response
            
            // Example of how you would send an email:
            /*
            Mail::send('emails.contact', $validated, function ($message) use ($validated) {
                $message->to('info@cesiummarketing.com')
                        ->subject('New Contact Form Submission from ' . $validated['name']);
            });
            */

            return back()->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');

        } catch (\Exception $e) {
            Log::error('Contact form submission failed', [
                'error' => $e->getMessage(),
                'email' => $validated['email'] ?? 'unknown',
                'timestamp' => now()
            ]);

            return back()->withErrors(['general' => 'There was an error sending your message. Please try again.']);
        }
    }

