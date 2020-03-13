<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        'shops_id', 'product_name', 'model_number', 'sku', 'ean', 'description', 'product_images', 'user_manual', 'status'
    ];
}
