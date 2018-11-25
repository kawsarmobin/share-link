<?php

use Illuminate\Database\Seeder;

class StoredUrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title1 = 'Daayre - Dilwale | Shah Rukh Khan| Kajol | Varun | Kriti | Official Music Video 2015';
        $title2 = 'Ogo Tomar Akash Duti Chokhe | Mahtim Shakib | Tasnuv Nawal';
        $title3 = '"Chammak Challo Ra.One" (video song) ShahRukh Khan,Kareena Kapoor';

        $url1 = 'https://www.youtube.com/watch?v=OLDxNulRUIM';
        $url2 = 'https://www.youtube.com/watch?v=nEnjby0x7Io';
        $url3 = 'https://www.youtube.com/watch?v=lxB-ki-qE64';

        $sturl1 = [
            'category_id' => 1,
            'title' => $title1,
            'url' => $url1,
        ];

        $sturl2 = [
            'category_id' => 2,
            'title' => $title2,
            'url' => $url2,
        ];

        $sturl3 = [
            'category_id' => 3,
            'title' => $title3,
            'url' => $url3,
        ];

        App\Models\Admin\StoredUrl::create($sturl1);
        App\Models\Admin\StoredUrl::create($sturl2);
        App\Models\Admin\StoredUrl::create($sturl3);
    }
}
