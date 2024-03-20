<?php

namespace Database\Factories;

use App\Models\MemoTest;
use App\Models\MemoTestImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemoTestImageFactory extends Factory
{
    protected $model = MemoTestImage::class;

    public function definition()
    {
        $randomNumber = $this->faker->numberBetween(1, 26);
        $imagePath = "../../img/" . $randomNumber . ".jpg";

        return [
            'memo_test_id' => MemoTest::factory(),
            'image_path' => $imagePath,
        ];
    }

}
