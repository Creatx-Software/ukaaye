<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Categories
        $categories = [
            ['name' => 'Satellite Systems',       'description' => 'Guides, news, and tips on satellite TV systems, dish installation, and LNBs across Sri Lanka.'],
            ['name' => 'Digital Receivers',        'description' => 'Reviews and setup guides for digital satellite receivers and set-top boxes.'],
            ['name' => 'Optical Fiber & Cabling',  'description' => 'Everything about fiber optic cables, connectors, splicing, and network cabling solutions.'],
            ['name' => 'Networking Gear',          'description' => 'Routers, switches, access points, and structured networking equipment for homes and businesses.'],
            ['name' => 'Signal Solutions',         'description' => 'Signal boosters, amplifiers, splitters, and troubleshooting for clear reception.'],
            ['name' => 'Ukaaye News & Updates',   'description' => 'Company news, new product arrivals, delivery updates, and offers from Ukaaye.'],
        ];

        $categoryModels = [];
        foreach ($categories as $cat) {
            $categoryModels[$cat['name']] = BlogCategory::firstOrCreate(
                ['name' => $cat['name']],
                [
                    'slug'        => Str::slug($cat['name']),
                    'description' => $cat['description'],
                    'is_active'   => true,
                ]
            );
        }

        // 2. Tags
        $tagsData = [
            'satellite dish', 'LNB', 'digital receiver', 'free-to-air', 'IPTV',
            'optical fiber', 'fiber splicing', 'SC connector', 'LC connector',
            'network switch', 'router setup', 'Wi-Fi', 'structured cabling',
            'signal booster', 'amplifier', 'splitter', 'CCTV', 'island-wide delivery',
            'Sri Lanka', 'technician tips',
        ];

        $tagModels = [];
        foreach ($tagsData as $tagName) {
            $tag = BlogTag::firstOrCreate(
                ['name' => $tagName],
                [
                    'slug'      => Str::slug($tagName),
                    'is_active' => true,
                ]
            );
            $tagModels[$tagName] = $tag;
        }

        // 3. 10 Sample Blog Posts
        $blogs = [
            // 1
            [
                'title'    => 'How to Choose the Right Satellite Dish for Your Home in Sri Lanka',
                'category' => 'Satellite Systems',
                'tags'     => ['satellite dish', 'LNB', 'Sri Lanka'],
                'author'   => 'Ukaaye Technical Team',
                'date'     => now()->subDays(10),
                'excerpt'  => 'Picking the correct dish size and LNB type makes all the difference for a clear, stable signal across Sri Lanka.',
                'content'  => '<p>In Sri Lanka, most households use either a 45 cm or 60 cm offset dish depending on their location and the satellite they target. Colombo and coastal areas generally get away with a 45 cm dish for Measat-3 (Astro / Dialog), while hill-country or southern regions benefit from a 60 cm or larger dish for a more stable signal.</p><p>Always pair your dish with a quality universal LNB (0.1 dB noise figure) for best performance. At Ukaaye, we stock a full range of dishes, mounts, and LNBs with island-wide delivery direct to your door or workshop.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 2
            [
                'title'    => 'Top 5 Digital Receivers Available in Sri Lanka – 2025 Guide',
                'category' => 'Digital Receivers',
                'tags'     => ['digital receiver', 'free-to-air', 'IPTV'],
                'author'   => 'Ukaaye Technical Team',
                'date'     => now()->subDays(18),
                'excerpt'  => 'From budget free-to-air boxes to full IPTV-capable receivers – here are the top picks we recommend in 2025.',
                'content'  => '<p>Whether you are a technician fitting a receiver for a client or a homeowner upgrading your setup, choosing the right digital receiver matters. Look for H.265/HEVC decoding, USB PVR support, and Ethernet/Wi-Fi built-in for future-proof use.</p><ul><li><strong>Entry Level:</strong> Standard FTA HD receiver – reliable and affordable</li><li><strong>Mid Range:</strong> Full HD receiver with USB recording</li><li><strong>Advanced:</strong> IPTV + satellite combo receiver</li><li><strong>Professional:</strong> 4K UHD receiver with CI+ slot</li><li><strong>OTT/IPTV Box:</strong> Android-based streaming receiver</li></ul><p>Ukaaye stocks all categories with genuine products and manufacturer warranties. Order online for same-week island-wide delivery.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 3
            [
                'title'    => 'Optical Fiber Cable Types Explained – Single Mode vs Multi Mode',
                'category' => 'Optical Fiber & Cabling',
                'tags'     => ['optical fiber', 'fiber splicing', 'SC connector', 'LC connector'],
                'author'   => 'Ukaaye Technical Team',
                'date'     => now()->subDays(5),
                'excerpt'  => 'Understanding the difference between single mode and multi mode fiber is essential before any installation job.',
                'content'  => '<p><strong>Single Mode (OS2):</strong> Uses a 9/125 µm core – ideal for long-distance runs of 10 km and beyond. Used in ISP backbone networks, GPON FTTH, and campus links. Yellow jacket colour.</p><p><strong>Multi Mode (OM3/OM4):</strong> Uses a 50/125 µm core – best for short distances up to 300 m inside buildings, data centres, and LAN backbones. Aqua or violet jacket colour.</p><p>At Ukaaye we supply both types in various counts (4-core, 8-core, 24-core, 48-core and more), along with SC, LC, FC, and ST connectors, splice-ready pigtails, and fusion splicing equipment – everything a fiber technician needs, delivered island-wide.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 4
            [
                'title'    => 'Setting Up a Small Office Network in Sri Lanka – A Practical Guide',
                'category' => 'Networking Gear',
                'tags'     => ['network switch', 'router setup', 'structured cabling', 'Wi-Fi'],
                'author'   => 'Ukaaye Technical Team',
                'date'     => now()->subDays(7),
                'excerpt'  => 'Step-by-step advice for technicians and business owners setting up a reliable office LAN with the right gear.',
                'content'  => '<p>A solid small-office network starts with a quality gigabit switch (8–24 port), a business-class router with dual WAN failover, and proper Cat6 structured cabling. Avoid using consumer routers for more than 15 users – they are not designed for the traffic load.</p><p>Key products to consider:</p><ul><li>Gigabit PoE switch for IP cameras and Wi-Fi access points</li><li>Dual-WAN router for fiber + 4G backup</li><li>Ceiling-mount Wi-Fi 6 access points for full coverage</li><li>Cat6 UTP/FTP patch panels and keystone jacks</li></ul><p>Ukaaye supplies all of the above from trusted brands. Talk to our team for a product recommendation tailored to your office size and budget.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 5
            [
                'title'    => 'Signal Too Weak? How to Fix Poor Satellite or Antenna Reception',
                'category' => 'Signal Solutions',
                'tags'     => ['signal booster', 'amplifier', 'splitter', 'satellite dish'],
                'author'   => 'Ukaaye Technical Team',
                'date'     => now()->subDays(3),
                'excerpt'  => 'Common causes of weak signal and how to fix them using boosters, amplifiers, and quality cables.',
                'content'  => '<p>Weak or pixelating signal is one of the most common issues reported by customers and technicians. Before buying a booster, check these first:</p><ol><li>Cable run length – every 10 m of RG6 coax loses about 3 dB at 2 GHz</li><li>Quality of the F-connector termination – poor crimp = signal loss</li><li>Number of splitters in line – each 2-way splitter costs ~3.5 dB</li><li>LNB condition – old or water-damaged LNBs degrade performance</li></ol><p>If the signal is genuinely insufficient, a distribution amplifier or inline booster from our range can restore signal strength across multiple outlet points. Ukaaye stocks a full range of signal amplifiers, splitters, and premium RG6 coax for technicians and home installers.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 6
            [
                'title'    => 'CCTV Camera Cabling – Coax vs IP Network: Which Should You Choose?',
                'category' => 'Networking Gear',
                'tags'     => ['CCTV', 'optical fiber', 'structured cabling', 'Sri Lanka'],
                'author'   => 'Ukaaye Technical Team',
                'date'     => now()->subDays(14),
                'excerpt'  => 'Choosing between analog coax CCTV and IP network cameras depends on your site, budget, and future plans.',
                'content'  => '<p><strong>Analog / HD-CVI/TVI/AHD (Coaxial):</strong> Cost-effective for small sites, runs over existing RG59/RG6 cable, supports up to 8 MP. Good choice when replacing an existing analog system.</p><p><strong>IP Network Cameras (PoE):</strong> Scalable, higher resolution (up to 4K), remote access via app, runs on standard Cat6 cabling. Ideal for new installations and larger sites.</p><p><strong>Fiber Extension:</strong> For distances beyond 90 m or between buildings, use fiber media converters with your IP cameras – Ukaaye supplies both the converters and fiber cable.</p><p>We stock DVRs, NVRs, PoE switches, cameras, and all cabling accessories. Island-wide delivery to technicians and contractors.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 7
            [
                'title'    => 'Free-to-Air Satellite Channels Available in Sri Lanka – 2025 List',
                'category' => 'Satellite Systems',
                'tags'     => ['free-to-air', 'satellite dish', 'digital receiver', 'Sri Lanka'],
                'author'   => 'Ukaaye Editorial',
                'date'     => now()->subDays(8),
                'excerpt'  => 'A quick reference list of popular FTA satellite channels receivable from Sri Lanka on common satellites.',
                'content'  => '<p>Sri Lanka sits within the footprints of several key satellites. Here are the most commonly used for free-to-air reception:</p><ul><li><strong>Measat-3/3a (91.5°E):</strong> Dialog TV, Sirasa, Shakthi, ITN and many regional channels</li><li><strong>Intelsat 20 (68.5°E):</strong> Wide range of South Asian and international FTA channels</li><li><strong>AsiaSat 7 (105.5°E):</strong> Variety of Asian FTA channels</li><li><strong>Thaicom 6 (78.5°E):</strong> C-band FTA, useful in fringe areas</li></ul><p>To receive these you need the right dish size, a compatible universal or C-band LNB, and a quality FTA receiver. Ukaaye supplies everything you need, nationwide.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 8
            [
                'title'    => 'How to Terminate an SC Fiber Connector – Step by Step for Technicians',
                'category' => 'Optical Fiber & Cabling',
                'tags'     => ['fiber splicing', 'SC connector', 'LC connector', 'technician tips'],
                'author'   => 'Ukaaye Technical Team',
                'date'     => now()->subDays(2),
                'excerpt'  => 'A practical termination guide for SC fiber connectors using the epoxy and polish method.',
                'content'  => '<p>SC connectors remain one of the most widely used fiber connectors in Sri Lankan installations. Here s the basic epoxy-polish method:</p><ol><li>Strip the outer jacket 60 mm, then the buffer tube 30 mm, leaving 25 mm of bare fiber</li><li>Clean the fiber thoroughly with IPA wipes</li><li>Inject a small amount of epoxy into the SC connector ferrule</li><li>Insert the fiber until it protrudes slightly from the ferrule tip</li><li>Cure in the oven at 100°C for 5 minutes (or use quick-cure epoxy)</li><li>Score and cleave the excess fiber flush with the ferrule</li><li>Polish using 12 µm, 3 µm, and 1 µm lapping film on a flat plate</li><li>Inspect with a 200× fiber microscope</li></ol><p>Ukaaye supplies SC, LC, FC, and ST connectors, polishing kits, epoxy, and fiber inspection microscopes – everything for professional field termination.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 9
            [
                'title'    => 'Why Ukaaye is Sri Lanka\'s Trusted Source for Signal & Connectivity Products',
                'category' => 'Ukaaye News & Updates',
                'tags'     => ['island-wide delivery', 'Sri Lanka', 'technician tips'],
                'author'   => 'Ukaaye Team',
                'date'     => now(),
                'excerpt'  => 'From satellite systems to fiber cables and networking gear – discover why thousands of technicians and businesses trust Ukaaye.',
                'content'  => '<p>Ukaaye is Sri Lanka\'s leading provider of satellite systems, digital receivers, optical fiber cables, networking gear, and signal solutions. We serve technicians, contractors, homes, and businesses across the entire island.</p><p><strong>Why choose Ukaaye?</strong></p><ul><li>Genuine products with manufacturer warranties</li><li>Competitive trade and retail pricing</li><li>Island-wide delivery – order today, receive this week</li><li>Expert technical support before and after your purchase</li><li>Wide in-stock range – no waiting for imports</li></ul><p>Whether you are installing a satellite dish in Jaffna, running fiber in Kandy, or upgrading a business network in Colombo – Ukaaye has the products and the expertise to support your project. Contact us or browse our full product range online.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],

            // 10
            [
                'title'    => 'Wi-Fi Dead Zones? How to Extend Coverage in Large Homes and Offices',
                'category' => 'Networking Gear',
                'tags'     => ['Wi-Fi', 'router setup', 'network switch', 'signal booster'],
                'author'   => 'Ukaaye Technical Team',
                'date'     => now()->subDays(4),
                'excerpt'  => 'Practical solutions to eliminate Wi-Fi dead zones using access points, mesh systems, or powerline adapters.',
                'content'  => '<p>A single router rarely covers a large two-story home or a medium-sized office reliably. Here are the best options to extend coverage:</p><p><strong>Option 1 – Wired Access Points:</strong> The best solution. Run Cat6 from your main switch to ceiling-mount Wi-Fi 6 access points in each zone. Consistent speed, no interference. Ukaaye stocks PoE-capable access points ideal for this setup.</p><p><strong>Option 2 – Mesh Wi-Fi System:</strong> Wireless backhaul between nodes – easy to install but slightly less efficient than wired. Good for homes where cabling is difficult.</p><p><strong>Option 3 – Powerline Adapters:</strong> Use existing electrical wiring to carry network – useful as a stopgap but performance varies by wiring quality.</p><p>For permanent installations we always recommend Option 1 with proper Cat6 structured cabling. Talk to us for product recommendations and quantities.</p>',
                'image'    => 'assets/img/blog/544356456.png',
            ],
        ];

        foreach ($blogs as $data) {
            $category = $categoryModels[$data['category']];

            $blog = Blog::create([
                'title'            => $data['title'],
                'slug'             => Str::slug($data['title']),
                'meta_title'       => $data['title'] . ' | Ukaaye Sri Lanka',
                'meta_description' => $data['excerpt'] . ' Trusted signal & connectivity products island-wide.',
                'meta_keywords'    => implode(', ', $data['tags']) . ', satellite Sri Lanka, fiber cable, Ukaaye',
                'blog_category_id' => $category->id,
                'author_name'      => $data['author'],
                'published_at'     => $data['date'],
                'description'      => $data['content'],
                'image_path'       => $data['image'],
                'is_active'        => true,
            ]);

            // Attach tags
            $tagIds = collect($data['tags'])->map(fn($name) => $tagModels[$name]->id ?? null)->filter();
            $blog->tags()->attach($tagIds);
        }

        $this->command->info('Ukaaye blog – 10 demo posts seeded successfully!');
    }
}
