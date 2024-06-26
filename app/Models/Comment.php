<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'description',
        'user_id',
        'article_id',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
