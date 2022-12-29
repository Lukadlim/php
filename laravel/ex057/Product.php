<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'slug',
        'id_category',
        'id_user',
    ];

    // Table name
    protected $table = 'products';

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'id_category');
    }
}