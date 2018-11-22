<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class StoredUrl extends Model
{
    protected $fillable = [
        'category_id', 'title', 'url',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Category');
    }
}
