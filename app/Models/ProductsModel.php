<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsModel extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    
    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'price',
        'stock',
        'subcategory_id',
        'description',
        'image',
        'visible',
        'visible_at',
        'created_at',
        
        
        
        
    ];

    protected $dates = ['deleted_at'];

}