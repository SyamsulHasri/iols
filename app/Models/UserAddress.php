<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_address';
     
    protected $fillable = [
        'user_id', 'address1', 'address2', 'city', 'postcode', 'state', 'country'
    ];
}
