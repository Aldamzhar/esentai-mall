<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class AboutMall extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'description',
        'development_history',
        'three_d_link'
    ];

    protected $translatable = [
        'description',
        'development_history'
    ];

    protected $table = 'about_mall';
}
