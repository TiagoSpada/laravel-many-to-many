<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Technology::truncate();

        $technologies = ['HTML', 'CSS', 'SCSS', 'Bootstrap', 'Javascript', 'VUE', 'PHP', 'MySQL', 'Laravel'];

        foreach ($technologies as $technology) {
            $new_technology = new Technology();
            $new_technology->title = $technology;

            $new_technology->save();
        }

        Schema::enableForeignKeyConstraints();
    }
}
