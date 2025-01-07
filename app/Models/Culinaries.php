<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Culinaries extends Model
{
    protected $table = 'culinaries';
    protected $fillable = [
        'business_name',
        'area',
        'address',
        'description',
        'instagram',
        'facebook',
        'twitter',
        'image'
    ];

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
