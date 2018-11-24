<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'image', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('uploads/profiles/'. $value);
        } else {
            return asset('admin/assets/images/users/no-image.jpg');
        }
    }
}
