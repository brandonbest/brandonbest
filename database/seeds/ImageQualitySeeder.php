<?php

use Illuminate\Database\Seeder;

class ImageQualitySeeder extends Seeder
{
    protected $imageQualities = [
        'original',
        'high',
        'medium',
        'low',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::transaction(function() {
            foreach ($this->imageQualities as $imageQuality) {
                \App\Models\ImageQuality::firstOrCreate(
                    ['quality' => $imageQuality]
                );
            }
        });
    }
}
