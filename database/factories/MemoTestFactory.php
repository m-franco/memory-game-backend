<?php

namespace Database\Factories;

use App\Models\MemoTest;
use Illuminate\Database\Eloquent\Factories\Factory;


class MemoTestFactory extends Factory
{
    protected $model = MemoTest::class;

    public function definition()
    {
        return [
            'name' => $this -> faker -> word,
            'high_score' => 0,
        ];
    }

}
