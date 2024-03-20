<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MemoTest;

class GameSession extends Model
{
    use HasFactory;

    protected $fillable = ['memo_test_id','retries', 'number_of_pairs', 'state', 'board_state'];

    /**
     * Get the memo test of the game session.
     */
    public function memoTest()
    {
        return $this->belongsTo(MemoTest::class,'memo_test_id');
    }

    /**
     * Get the images of the game session.
     */
    public function images()
    {
        return $this->hasManyThrough(MemoTestImage::class, MemoTest::class);
    }

    /**
     * Get the board state of the game session.
     */
    public function getBoardStateAttribute($value)
    {
        return json_decode($value, true);
    }

    /**
     * Set the board state of the game session.
     */
    public function setBoardStateAttribute($value)
    {
        $this->attributes['board_state'] = json_encode($value);
    }
}
