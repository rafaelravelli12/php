<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;

    protected $table = 'qrcode';

    protected $guarded = [];

    public function sales() {
        return $this->hasMany('App\Models\Sales');
    }
}
