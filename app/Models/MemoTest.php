<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoTest extends Model
{
    use HasFactory;

    protected $fillable = ['high_score'];

    /**
     * Get all the game sessions of the memo test.
     */
    public function gameSessions()
    {
        return $this->hasMany(GameSession::class);
    }

    /**
     * Get the images of the memo test.
     */
    public function images()
    {
        return $this->hasMany(MemoTestImage::class);
    }
}
