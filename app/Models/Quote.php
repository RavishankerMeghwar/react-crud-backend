<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'dob',
        'address',
        'apt',
        'zip_code',
        'gender',
        'merital_status',
        'ss_number',
    ];


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /**
     * 
     *
     * @return HasMany
     */
    public function quote_details(): HasMany
    {
        return $this->hasMany(
            QuoteDetail::class,
            'qoute_id',
            'id'
        );
    }


}