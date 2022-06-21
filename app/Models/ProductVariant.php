<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
        'variant', 'variant_id', 'product_id'
    ];

    /**
     * Get the variant that owns the ProductVariant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variant()
    {
        return $this->belongsTo(Variant::class, 'variant_id', 'id');
    }


    /**
     * Get the product that owns the ProductVariant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    /**
     * Get all of the variants price for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variant_one()
    {
        return $this->hasMany(ProductVariantPrice::class);
    }
    public function variant_two()
    {
        return $this->hasMany(ProductVariantPrice::class, 'product_variant_two', 'id');
    }
    public function variant_three()
    {
        return $this->hasMany(ProductVariantPrice::class, 'product_variant_three', 'id');
    }
}
