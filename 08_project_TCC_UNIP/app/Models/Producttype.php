<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producttype extends Model
{
    use HasFactory;

    protected $table = 'product_type';

    protected $fillable = [
        'name',
        'random_value',
        'product_type_name',
        'product_type_uuid',
        'description',
        'created_at',
        'updated_at',
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
