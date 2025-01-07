<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = [
        'umkm_id',
        'culinaries_id',
        'batik_id',
        'review',
        'name'
    ];

    public function umkm() {
        return $this->belongsTo(Umkm::class);
    }

    public function culinary() {
        return $this->belongsTo(Culinaries::class);
    }

    public function batik() {
        return $this->belongsTo(Batik::class);
    }
}
