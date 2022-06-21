<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{
    protected $fillable = [
        'price', 'stock', 'product_id'
    ];

    /**
     * Get the product that owns the ProductVariantPrice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

   /**
    * Get the user that owns the ProductVariantPrice
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function variant_one()
   {
       return $this->belongsTo(ProductVariant::class, 'product_variant_one', 'id');
   }

   public function variant_two()
   {
       return $this->belongsTo(ProductVariant::class, 'product_variant_two', 'id');
   }

   public function variant_three()
   {
       return $this->belongsTo(ProductVariant::class, 'product_variant_three', 'id');
   }
}
