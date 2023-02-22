<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Events extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'event_name',
        'event_description',
        'event_venue',
        'event_assign',
        'event_path',
        'event_author',
        'event_sdate',
        'event_edate',
    ];
}