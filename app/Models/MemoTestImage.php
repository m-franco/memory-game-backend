<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoTestImage extends Model
{
    use HasFactory;

    protected $fillable = ['memo_test_id', 'image_path'];

    /**
     * Get the memo test of the image.
     */
    public function memoTest()
    {
        return $this->belongsTo(MemoTest::class);
    }
}
