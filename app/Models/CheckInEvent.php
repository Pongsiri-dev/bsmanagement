<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckInEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_code',
        'member_firstname',
        'member_lastname',
        'member_telephone',
        'member_career'
    ];
}