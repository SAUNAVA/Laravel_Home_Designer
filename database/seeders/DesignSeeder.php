<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Design;

class DesignSeeder extends Seeder
{
    public function run()
    {
        $designs = [
            [
                'name' => 'Modern Living Room',
                'description' => 'A stylish modern living room design.',
                'length' => 20,
                'width' => 15,
                'height' => 10,
                'style' => 'modern',
                'image_path' => 'designs/modern-living-room.jpg',
            ],
            [
                'name' => 'Vintage Bedroom',
                'description' => 'A cozy vintage bedroom setup.',
                'length' => 18,
                'width' => 12,
                'height' => 9,
                'style' => 'vintage',
                'image_path' => 'designs/vintage_bedroom.jpg',
            ],
            [
                'name' => 'Minimalist Kitchen',
                'description' => 'A clean and minimalist kitchen design.',
                'length' => 15,
                'width' => 10,
                'height' => 8,
                'style' => 'minimalist',
                'image_path' => 'designs/minimalist_kitchen.jpg',
            ],
            // Add more designs as needed
        ];

        foreach ($designs as $design) {
            Design::create($design);
        }
    }
}
