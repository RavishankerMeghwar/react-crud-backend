<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Insurance extends Model
{
    use HasFactory;

    /** INSURANCE TYPE */
    public const VEHICLE_INSURANCE = 'vehicle';
    public const PROPERTY_INSURANCE = 'property';
    public const BUSINESS_INSURANCE = 'business';
    public const OTHER_INSURANCE = 'other';


    /** ALL INSURANCE TYPE */
    public const ALL_INSURANCE_TYPE = [
        self::VEHICLE_INSURANCE,
        self::PROPERTY_INSURANCE,
        self::BUSINESS_INSURANCE,
        self::OTHER_INSURANCE
    ];

    protected $fillable = [
        'title',
        'type',
        'icon'
    ];

    protected $appends    = ['icon_url'];

    public function getIconUrlAttribute()
    {
        if ($this->icon) {
            return url('/').'/public/insurances/'.$this->id.'/'.$this->icon;
        }
        return null;
    }


    /*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/

    /**
     * questions
     *
     * @return HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(
            Question::class,
            'insurance_id',
            'id',
        );
    }

}