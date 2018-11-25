<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = ['name' => 'YouTube'];
        $cat2 = ['name' => 'FaceBook'];
        $cat3 = ['name' => 'Instagram'];
        $cat4 = ['name' => 'Linkdin'];
        $cat5 = ['name' => 'Stack Overflow'];

        App\Models\Admin\Category::create($cat1);
        App\Models\Admin\Category::create($cat2);
        App\Models\Admin\Category::create($cat3);
        App\Models\Admin\Category::create($cat4);
        App\Models\Admin\Category::create($cat5);
    }
}
