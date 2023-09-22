<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'insurance_id',
        'title',
        'type'
    ];


/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/

    /**
     * options
     *
     * @return HasMany
     */
    public function options(): HasMany
    {
        return $this->hasMany(
            Option::class,
            'option_id',
            'id',
        );
    }

    /**
     * insurance
     *
     * @return BelongsTo
     */
    public function insurance(): BelongsTo
    {
        return $this->belongsTo(
            Insurance::class,
            'insurance_id',
            'id',
        );
    }
    
}
