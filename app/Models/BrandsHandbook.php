<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BrandsHandbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $table = 'brands_handbook';

    public function shopsAndBoutiques(): BelongsToMany
    {
        return $this->belongsToMany(ShopsAndBoutiques::class, 'ref_shops_and_boutiques_brands')->withTimestamps();
    }
}
