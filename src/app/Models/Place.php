<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'address',
        'review',
        'latitude',
        'longitude',
        'mainImage',
        'images',
        'additionalInformation',
        'isActive',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
