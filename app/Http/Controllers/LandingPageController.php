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
                'long_desc' => 'Achieve top search engine rankings and attract high-intent organic traffic with our comprehensive SEO services. We conduct in-depth keyword research, technical SEO audits, on-page optimization, and high-quality link building to improve your site\'s visibility. Our strategies are tailored to the iGaming industry, focusing on compliance, local SEO, and content strategies that resonate with your target audience. We monitor algorithm changes and competitor strategies to ensure your site remains competitive and continues to grow its organic footprint.',
            [
                'icon' => '/assets/icons/social-media.png',
                'title' => 'Social Media Marketing',
                'desc' => 'Engage your audience and build lasting brand loyalty.',
                'long_desc' => 'Build a vibrant community and amplify your brand message across all major social media platforms. Our social media marketing services include content creation, community management, paid social campaigns, and influencer collaborations. We develop strategies that foster engagement, drive traffic to your iGaming platform, and convert followers into loyal players. From captivating visuals to interactive campaigns, we ensure your social presence is dynamic, relevant, and aligned with your brand\`s voice.'
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
                'icon' => '/assets/icons/branding.png',
                'title' => 'Branding & Visual Identity',
                'desc' => 'Develop a distinctive brand that stands out in the market.',
                'long_desc' => 'Create a powerful and memorable brand identity that resonates with your target audience and differentiates you from competitors. Our branding services include logo design, visual identity development, brand guidelines creation, and brand positioning strategy. We work closely with you to understand your vision and values, translating them into a cohesive visual language that speaks to iGaming players. From color palettes and typography to imagery and tone of voice, we ensure every element of your brand works together to create a compelling and trustworthy presence.'
            ],
            [
                'icon' => '/assets/icons/influencer-marketing.png',
                'title' => 'Influencer Marketing',
                'desc' => 'Leverage trusted voices to expand your reach and credibility.',
                'long_desc' => 'Partner with influential personalities and content creators to amplify your brand message and reach new audiences. Our influencer marketing services include influencer identification and vetting, campaign strategy development, content collaboration, and performance tracking. We focus on building authentic partnerships with influencers who align with your brand values and have genuine connections with your target demographic. From micro-influencers to industry thought leaders, we help you leverage trusted voices to build credibility and drive player acquisition.'
            ]
        ];

        $kpis = [
            [
                'icon' => 'trending-up',
                'number' => '300%',
                'label' => 'Average ROI Increase',
                'description' => 'Our clients see an average 300% return on their marketing investment within the first 6 months.'
            ],
            [
                'icon' => 'target',
                'number' => '150+',
                'label' => 'Successful Campaigns',
                'description' => 'Over 150 successful marketing campaigns launched across various iGaming verticals.'
            ],
            [
                'icon' => 'dollar-sign',
                'number' => '50M+',
                'label' => 'Revenue Generated',
                'description' => 'Our strategies have generated over $50 million in revenue for our iGaming clients.'
            ]
        ];

        $teamMembers = [
            [
                'name' => 'Sarah Mitchell',
                'role' => 'CEO & Marketing Strategist',
                'photo' => '/assets/team/sarah-mitchell.jpg'
            ],
            [
                'name' => 'Marcus Chen',
                'role' => 'Head of Data Analytics',
                'photo' => '/assets/team/marcus-chen.jpg'
            ],
            [
                'name' => 'Elena Rodriguez',
                'role' => 'Creative Director',
                'photo' => '/assets/team/elena-rodriguez.jpg'
            ],
        ];

        // Synchronized blog posts with BlogController
        $blogPosts = [
            [
                'id' => 1,
                'title' => 'AI-Powered Marketing Strategies for iGaming Success',
                'desc' => 'Discover how artificial intelligence is revolutionizing iGaming marketing with personalized campaigns, predictive analytics, and automated optimization strategies.',
                'excerpt' => 'Discover how artificial intelligence is revolutionizing iGaming marketing with personalized campaigns, predictive analytics, and automated optimization strategies.',
                'slug' => 'ai-powered-marketing-strategies-igaming',
                'date' => '2024-01-15',
                'author' => 'Dr. Sarah Mitchell',
                'readTime' => '8 min',
                'image' => '/assets/blog/ai-igaming-marketing.jpg',
                'category' => 'AI & Technology',
                'tags' => ['AI', 'Marketing', 'iGaming', 'Automation', 'Analytics'],
                'url' => '/blog/ai-powered-marketing-strategies-igaming'
            ],
            [
                'id' => 2,
                'title' => 'Data-Driven Player Acquisition: Converting Insights into Revenue',
                'desc' => 'Learn how to leverage advanced analytics and data science to optimize your player acquisition funnel and maximize lifetime value in the competitive iGaming market.',
                'excerpt' => 'Learn how to leverage advanced analytics and data science to optimize your player acquisition funnel and maximize lifetime value in the competitive iGaming market.',
                'slug' => 'data-driven-player-acquisition-revenue',
                'date' => '2024-01-12',
                'author' => 'Marcus Chen',
                'readTime' => '6 min',
                'image' => '/assets/blog/data-driven-acquisition.jpg',
                'category' => 'Data Analytics',
                'tags' => ['Data Analytics', 'Player Acquisition', 'LTV', 'Conversion', 'ROI'],
                'url' => '/blog/data-driven-player-acquisition-revenue'
            ],
            [
                'id' => 3,
                'title' => 'Building Brand Loyalty in the iGaming Industry',
                'desc' => 'Explore proven strategies for creating lasting relationships with players through personalized experiences, loyalty programs, and community building initiatives.',
                'excerpt' => 'Explore proven strategies for creating lasting relationships with players through personalized experiences, loyalty programs, and community building initiatives.',
                'slug' => 'building-brand-loyalty-igaming-industry',
                'date' => '2024-01-10',
                'author' => 'Elena Rodriguez',
                'readTime' => '7 min',
                'image' => '/assets/blog/brand-loyalty-igaming.jpg',
                'category' => 'Brand Strategy',
                'tags' => ['Brand Loyalty', 'Customer Retention', 'Community', 'Personalization'],
                'url' => '/blog/building-brand-loyalty-igaming-industry'
            ],
            [
                'id' => 4,
                'title' => 'Navigating Regulatory Compliance in iGaming Marketing',
                'desc' => 'Stay compliant while maximizing marketing effectiveness. A comprehensive guide to navigating the complex regulatory landscape of iGaming marketing.',
                'excerpt' => 'Stay compliant while maximizing marketing effectiveness. A comprehensive guide to navigating the complex regulatory landscape of iGaming marketing.',
                'slug' => 'regulatory-compliance-igaming-marketing',
                'date' => '2024-01-08',
                'author' => 'James Thompson',
                'readTime' => '9 min',
                'image' => '/assets/blog/regulatory-compliance.jpg',
                'category' => 'Compliance',
                'tags' => ['Compliance', 'Regulation', 'Legal', 'Marketing', 'Risk Management'],
                'url' => '/blog/regulatory-compliance-igaming-marketing'
            ],
            [
                'id' => 5,
                'title' => 'Social Media Strategies That Drive iGaming Engagement',
                'desc' => 'Master the art of social media marketing in the iGaming space with platform-specific strategies, content creation tips, and engagement tactics.',
                'excerpt' => 'Master the art of social media marketing in the iGaming space with platform-specific strategies, content creation tips, and engagement tactics.',
                'slug' => 'social-media-strategies-igaming-engagement',
                'date' => '2024-01-05',
                'author' => 'Alex Kim',
                'readTime' => '5 min',
                'image' => '/assets/blog/social-media-strategies.jpg',
                'category' => 'Social Media',
                'tags' => ['Social Media', 'Engagement', 'Content Marketing', 'Community Building'],
                'url' => '/blog/social-media-strategies-igaming-engagement'
            ],
            [
                'id' => 6,
                'title' => 'Mobile-First Marketing: Capturing the iGaming Audience',
                'desc' => 'With mobile gaming dominating the market, learn how to create mobile-first marketing campaigns that resonate with modern iGaming audiences.',
                'excerpt' => 'With mobile gaming dominating the market, learn how to create mobile-first marketing campaigns that resonate with modern iGaming audiences.',
                'slug' => 'mobile-first-marketing-igaming-audience',
                'date' => '2024-01-03',
                'author' => 'Lisa Wang',
                'readTime' => '6 min',
                'image' => '/assets/blog/mobile-gaming-marketing.jpg',
                'category' => 'Mobile Marketing',
                'tags' => ['Mobile Marketing', 'User Experience', 'App Marketing', 'Mobile Gaming'],
                'url' => '/blog/mobile-first-marketing-igaming-audience'
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
}

