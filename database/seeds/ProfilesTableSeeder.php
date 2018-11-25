<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Admin\Profile::create([
            'user_id' => 1,
            // include image by Profile Model
            // 'image' => 'admin/assets/images/users/no-image.jpg',
            'status' => 'Web developer',
        ]);
    }
}
