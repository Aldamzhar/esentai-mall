<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use TCG\Voyager\Traits\Translatable;

class ShopsAndBoutiques extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location'
    ];

    protected $translatable = [
        'name',
        'description'
    ];

    protected $table = 'shops_and_boutiques';

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(BrandsHandbook::class, 'ref_shops_and_boutiques_brands')->withTimestamps();
    }

    public function contacts(): BelongsTo
    {
        return $this->belongsTo(Contacts::class, 'contacts_id');
    }
}
