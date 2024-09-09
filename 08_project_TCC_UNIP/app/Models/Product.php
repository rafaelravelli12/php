<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'product_type_id',     
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'value' => 'decimal:5',
    ];

    public function producttype()
    {
        return $this->belongsTo('App\Models\Producttype', 'product_type_id');
    }
}
