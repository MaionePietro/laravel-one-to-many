<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
            $new_progect = new Project();
            $new_progect->title = $faker->unique()->sentence(2,true);
            $new_progect->customer = $faker->unique()->name();
            $new_progect->description = $faker->paragraph();
            $new_progect->url = $faker->url();
            $new_progect->slug = Str::slug($new_progect->title, '-');
            $new_progect->save();
        }
    }
}
