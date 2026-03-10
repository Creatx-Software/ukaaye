<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => 'Satellite Dish Installations',      'category_name' => 'Installations'],
            ['name' => 'Fiber Optic Cable Projects',        'category_name' => 'Installations'],
            ['name' => 'Office Network Setup',              'category_name' => 'Installations'],
            ['name' => 'CCTV System Installations',         'category_name' => 'Installations'],
            ['name' => 'Digital Receiver Setup',            'category_name' => 'Installations'],
            ['name' => 'Warehouse & Product Stock',         'category_name' => 'Products'],
            ['name' => 'Networking Gear & Accessories',     'category_name' => 'Products'],
            ['name' => 'Optical Fiber Cable Range',         'category_name' => 'Products'],
            ['name' => 'Signal Solutions & Amplifiers',     'category_name' => 'Products'],
            ['name' => 'Island-wide Delivery Operations',   'category_name' => 'Operations'],
        ];

        foreach ($items as $item) {
            Gallery::firstOrCreate(
                ['name' => $item['name']],
                [
                    'category_name' => $item['category_name'],
                    'image_path'    => 'assets/img/gallery/64365467.jpg',
                    'is_active'     => true,
                ]
            );
        }

        $this->command->info('Ukaaye gallery seeded successfully!');
    }
}
