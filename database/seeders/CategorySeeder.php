<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Tecnologia',
            'slug' => 'tecnologia'
        ]);
        Category::create([
            'name' => 'Automoviles',
            'slug' => 'automoviles'
        ]);
        Category::create([
            'name' => 'Cinematografia',
            'slug' => 'cinematografia'
        ]);
    
        Category::create([
            'name' => 'Gastronomia',
            'slug' => 'gastronomia'
        ]);
    }
    
}
