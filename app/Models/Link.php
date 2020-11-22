<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'original_link',
        'short_link',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
