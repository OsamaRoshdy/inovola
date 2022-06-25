<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','vat','shipping_fees','total','currency'];

    public function products()
    {
        return $this->hasManyThrough(Product::class, CartProduct::class);
    }
}
