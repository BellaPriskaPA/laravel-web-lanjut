<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkms';
    protected $fillable = [
        'business_name',
        'address',
        'area',
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
