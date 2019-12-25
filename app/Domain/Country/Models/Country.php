<?php

namespace Domain\Country\Models;

use Domain\City\Models\City;
use Domain\Listing\Models\Listing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Get the cities of this country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    /**
     * Get the listings of this country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function listings()
    {
        return $this->hasManyThrough(Listing::class, City::class);
    }
}
