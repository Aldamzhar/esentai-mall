<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'mall_presentation_link',
        'mall_general_rules_link',
        'mall_parking_rules_link',
        'for_users',
        'for_leasers',
        'for_advertisers'
    ];

    protected $table = 'contacts';
}
