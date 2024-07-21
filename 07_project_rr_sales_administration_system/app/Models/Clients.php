<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function establishment()
    {
        return $this->belongsTo('App\Models\Establishments', 'establishment_id');
    }
    public function sales()
    {
        return $this->hasMany('App\Models\Sales');
    }
}
