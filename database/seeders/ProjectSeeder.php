<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 10; $i++) {
            $newProj = new Project();
            $newProj->title = $faker->sentence(3);
            $newProj->content = $faker->text(100);
            $newProj->slug = Str::slug($newProj->title, '-');
            $newProj->save();
        }
    }
}
