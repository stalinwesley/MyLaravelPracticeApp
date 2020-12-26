<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyProduct extends Model
{
    use HasFactory;

    protected $table = 'my_products';
    protected $primaryKey = 'product_id';
    protected $fillable = ['category_id','product_name','product_brand','price','stack'];

    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    // protected $dateFormat = 'U';

    // protected $connection = 'sqlite';

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    protected $attributes = [
        'price' => 10,
    ];


}
