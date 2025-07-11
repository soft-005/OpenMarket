<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cat1 = ['name' => 'Fasion', 'slug' => Str::slug('Fasion')];
        $cat2 = ['name' => 'Home & Garden', 'slug' => Str::slug('Home & Garden')];
        $cat3 = ['name' => 'Electronics', 'slug' => Str::slug('Electronics')];
        $cat4 = ['name' => 'Funiture', 'slug' => Str::slug('Funiture')];
        $cat5 = ['name' => 'Healthy & Beauty', 'slug' => Str::slug('Healthy & Beauty')];
        $cat6 = ['name' => 'Gift Ideas', 'slug' => Str::slug('Gift Ideas')];
        $cat7 = ['name' => 'Toy & Games', 'slug' => Str::slug('Toy & Games')];
        $cat8 = ['name' => 'Cooking', 'slug' => Str::slug('Cooking')];
        $cat9 = ['name' => 'Smart Phones', 'slug' => Str::slug('Smart Phones')];
        $cat10 = ['name' => 'Cameras & Photo', 'slug' => Str::slug('Cameras & Photo')];
        $cat10 = ['name' => 'Accessories', 'slug' => Str::slug('Accessories')];

        Category::Create($cat1);
        Category::Create($cat2);
        Category::Create($cat3);
        Category::Create($cat4);
        Category::Create($cat5);
        Category::Create($cat6);
        Category::Create($cat7);
        Category::Create($cat8);
        Category::Create($cat9);
        Category::Create($cat10);
    }
}
