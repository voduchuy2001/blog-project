<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'facebook',
        'instagram',
        'youtube',
        'pinterest',
        'phone',
        'ads',
        'backLinkAds',
        'altAds',
        'webName',
        'webDes',
    ];
}
