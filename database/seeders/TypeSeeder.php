<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Schema;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        Schema::disableForeignKeyConstraints();

        Type::truncate();

        for ($i = 0; $i < 7; $i++) {
            $type = new Type();

            $type->title = $faker->word();

            $type->save();
        };

        Schema::enableForeignKeyConstraints();
    }
}
