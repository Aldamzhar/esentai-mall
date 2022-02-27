<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class EsentaiApp extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'description',
        'download_link'
    ];

    protected $translatable = [
        'description',
        'download_link'
    ];

    protected $table = 'esentai_app_info';
}
