<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_type',
        'property_for',
        'property_space',
        'property_address',
        'property_bedrooms',
        'property_bathrooms',
        'property_garges',
        'property_desc',
        'user_id'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
