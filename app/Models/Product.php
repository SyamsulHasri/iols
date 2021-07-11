<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
     
    protected $fillable = [
        'name', 'price', 'description', 'image'
    ];

    /**
     * Get the price for the product.
     */
    public function price()
    {
        return $this->hasMany(ProductPrice::class);
    }
    
}
