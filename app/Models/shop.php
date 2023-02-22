<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'uuid',
        'name',
        'detail',
        'profile_image',
        'latitude',
        'longitude',
        'address',
        'sub_district',
        'district',
        'province',
        'zipcode',
        'images',
        'shop_condition',
        'is_open',
        'is_approve',
        'is_start',
        'last_active',
        'member',
        'shop_type'
    ];
}