<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class Services extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'name',
        'description',
    ];

    protected $translatable = [
        'name',
        'description',
    ];

    protected $table = 'services';

    public function contacts(): BelongsTo
    {
        return $this->belongsTo(Contacts::class, 'contacts_id');
    }
}
