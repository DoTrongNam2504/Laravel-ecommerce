<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products'; 
    protected $filltable = [
        'category_id',
        'name',
        'slug',
        'description',
        'content',
        'image',
        'price', 
        'seller_price',
        'qty',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ] ; 
}
