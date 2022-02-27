<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class NewsAndEvents extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'title',
        'description',
    ];

    protected $translatable = [
        'title',
        'description',
    ];

    protected $table = 'news_and_events';

}
