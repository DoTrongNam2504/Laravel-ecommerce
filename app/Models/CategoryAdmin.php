<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAdmin extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $filltable = [
        'name', 
        'slug', 
        'description', 
        'image',
        'status', 
        'popular', 
        'meta_title', 
        'meta_description', 
        'meta_keywords', 
    ]; 
}
