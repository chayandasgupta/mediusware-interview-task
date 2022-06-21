<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'title', 'description'
    ];


    /**
     * Get all of the product_variants for the Variant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
