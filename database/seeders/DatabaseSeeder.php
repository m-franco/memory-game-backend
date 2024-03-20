<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MemoTest;
use App\Models\MemoTestImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        MemoTest::factory(1)->create(['id'=> 100,'name' => '4 cards']);
        MemoTestImage::factory(2)->create(['memo_test_id' =>100]);

        $imagePaths = [
            "../../img/1.jpg",
            "../../img/12.jpg",
            "../../img/23.jpg",
        ];

        MemoTest::factory(1)->create(['id'=> 101, 'name' => 'Goalkeepers']);
        MemoTestImage::factory(2)->create([
            'memo_test_id' =>101,
            'image_path' => function () use (&$imagePaths) {
                $randomIndex = rand(0, count($imagePaths) - 1);
                $selectedPath = $imagePaths[$randomIndex];
                array_splice($imagePaths, $randomIndex, 1);
                return $selectedPath;
            },
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
