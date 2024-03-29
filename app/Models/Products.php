<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
    ];

    public function OrderHasProducts()
    {
        return  $this->belongsTo(OrderHasProducts::class,  'product_id', 'id');
    }

}
