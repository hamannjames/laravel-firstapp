<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pages extends Model
{
    protected $fillable = [
        'title',
        'content',
        'published_at',
        'slug'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function setPublishedAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
}
