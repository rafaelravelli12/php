<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clients()
    {
        return $this->belongsTo('App\Models\Clients', 'client_id');
    }
    
    public function establishment()
    {
        return $this->belongsTo('App\Models\Establishments', 'establishment_id');
    }
}
