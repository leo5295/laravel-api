<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['laravel', 'php', 'vue', 'js', 'vite + laravel', 'vite + vue'];

        foreach ($technologies as $item) {
            $newType = new Technology();
            $newType->name = $item;
            $newType->slug = Str::slug($newType->name, '-');
            $newType->save();
        }
    }
}
