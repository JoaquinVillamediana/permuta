<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactModel extends Model
{
    use SoftDeletes;
    protected $table = 'contacts';
    
    protected $fillable = [
        'interested_id',
        'product_id',
        

    ];

    protected $dates = ['deleted_at'];

}