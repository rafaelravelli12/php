<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishments extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clients()
    {
        return $this->hasMany('App\Models\Clients');
    }

    public function user()
    {
        return $this->hasMany('App\Models\Users');
    }
    public function sales()
    {
        return $this->hasMany('App\Models\Sales');
    }
    public function audit()
    {
        return $this->hasMany('App\Models\Audit');
    }

}
