<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

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
            'image'     => 'dummy',
            'name'      => 'Vue Js',
            'slug'      => 'vue-js',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'React Js',
            'slug'      => 'react-js',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'PHP',
            'slug'      => 'php',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'Nuxt Js',
            'slug'      => 'nuxt-js',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'Laravel',
            'slug'      => 'laravel',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'Lumen',
            'slug'      => 'lumen',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'Python',
            'slug'      => 'python',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'JavaScript',
            'slug'      => 'javascript',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'CodeIgniter',
            'slug'      => 'codeigniter',
        ]);
        Category::create([
            'image'     => 'dummy',
            'name'      => 'DevOps',
            'slug'      => 'devops',
        ]);
    }
}
