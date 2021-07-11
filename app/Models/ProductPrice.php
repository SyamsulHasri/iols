<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_price';

    protected $fillable = [
        'product_id', 'price_level', 'price'
    ];

    /**
     * Get the product price.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
