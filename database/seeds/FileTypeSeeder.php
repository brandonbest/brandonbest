<?php

use Illuminate\Database\Seeder;

class FileTypeSeeder extends Seeder
{
    protected $fileTypes = [
        'Resume'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::transaction(function() {
            foreach ($this->fileTypes as $fileType) {
                $slug = \Illuminate\Support\Str::slug($fileType);
                \App\Models\FileType::firstOrCreate(['slug' => $slug],
                    [
                        'type' => $fileType,
                        'slug' => $slug,
                    ]);
            }
        });
    }
}
