<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What types of products does Ukaaye supply?',
                'answer'   => '<p>Ukaaye is Sri Lanka\'s leading provider of <strong>satellite systems, digital receivers, optical fiber cables, networking gear, and signal solutions</strong>. We supply everything from satellite dishes and LNBs to Cat6 cabling, fiber splicing equipment, routers, switches, and CCTV accessories — all under one roof.</p>',
            ],
            [
                'question' => 'Do you offer island-wide delivery across Sri Lanka?',
                'answer'   => '<p>Yes! We deliver to <strong>all districts island-wide</strong> — from Colombo and Kandy to Jaffna, Galle, Matara, Hambantota, Trincomalee, and beyond. Orders are dispatched promptly and we aim for delivery within the same week for most locations.</p>',
            ],
            [
                'question' => 'Can technicians and contractors buy wholesale from Ukaaye?',
                'answer'   => '<p>Absolutely. We cater to <strong>professional technicians, installers, and contractors</strong> with trade pricing and bulk order options. Contact our team for a trade account and pricing sheet for regular purchases.</p>',
            ],
            [
                'question' => 'What satellite dish size do I need for my location in Sri Lanka?',
                'answer'   => '<p>For most Colombo and low-elevation areas a <strong>45 cm offset dish</strong> is sufficient for Measat-3 (91.5°E). For hill-country, southern, or northern regions a <strong>60 cm or larger dish</strong> is recommended for a stable signal. Our team can advise based on your exact location and target satellite.</p>',
            ],
            [
                'question' => 'Do you supply both single mode and multi mode fiber optic cable?',
                'answer'   => '<p>Yes — we stock <strong>both single mode (OS2, yellow)</strong> for long-distance runs and <strong>multi mode (OM3/OM4, aqua)</strong> for shorter indoor/campus links. Available in 4-core, 8-core, 24-core, 48-core and higher counts, along with SC, LC, FC, and ST connectors.</p>',
            ],
            [
                'question' => 'Are the products you sell genuine and under warranty?',
                'answer'   => '<p>Yes. All products supplied by Ukaaye are <strong>genuine items with manufacturer warranties</strong>. We do not deal in counterfeit or grey-market goods, ensuring you get reliable performance and after-sales support.</p>',
            ],
            [
                'question' => 'Do you sell digital receivers compatible with Dialog and Airtel satellite services?',
                'answer'   => '<p>We stock a range of digital receivers suitable for <strong>free-to-air (FTA), Dialog TV (Measat-3)</strong>, and other Sri Lankan satellite platforms. We also carry IPTV-capable and Android-based receivers. Contact us to confirm compatibility for your specific service.</p>',
            ],
            [
                'question' => 'Can I get Cat6 and structured cabling supplies for office installations?',
                'answer'   => '<p>Yes — we supply <strong>Cat6 UTP and FTP cable</strong>, patch panels, keystone jacks, RJ45 plugs, cable trays, and all accessories needed for complete structured cabling projects for offices, schools, hotels, and commercial buildings.</p>',
            ],
            [
                'question' => 'Do you supply PoE switches and Wi-Fi access points?',
                'answer'   => '<p>Yes. We stock <strong>PoE-capable gigabit switches</strong> in 8, 16, and 24-port configurations, as well as ceiling-mount and outdoor <strong>Wi-Fi access points (Wi-Fi 5 and Wi-Fi 6)</strong> from trusted brands — ideal for office, hotel, or campus deployments.</p>',
            ],
            [
                'question' => 'Do you provide technical support for products purchased from Ukaaye?',
                'answer'   => '<p>Yes — our team provides <strong>expert technical support</strong> before and after your purchase. Whether you need help selecting the right product, troubleshooting a signal issue, or planning a network installation, we are happy to assist via phone, WhatsApp, or in-store.</p>',
            ],
            [
                'question' => 'Can I order online and how long does delivery take?',
                'answer'   => '<p>You can place orders via our website or contact us directly via phone/WhatsApp. <strong>Colombo and suburbs</strong> typically receive orders within 1–2 business days. <strong>Outstation deliveries</strong> are usually completed within 3–5 business days depending on the courier and location.</p>',
            ],
            [
                'question' => 'How can I contact Ukaaye for orders or product enquiries?',
                'answer'   => '<p>You can reach us through our website contact form, by phone, or on <strong>WhatsApp</strong>. Our team is available during business hours to assist with product selection, bulk pricing, order tracking, and technical advice. We are happy to help homes, businesses, and technicians alike.</p>',
            ],
        ];

        foreach ($faqs as $data) {
            Faq::updateOrCreate(
                ['question' => $data['question']],
                [
                    'answer' => $data['answer'],
                    'status' => true,
                ]
            );
        }

        $this->command->info('Ukaaye FAQs seeded successfully! (' . count($faqs) . ' questions)');
    }
}
