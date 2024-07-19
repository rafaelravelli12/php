<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $table = 'audit';

    protected $guarded = [];

    public function establishment()
    {
        return $this->belongsTo('App\Models\Establishments', 'establishment_id');
    }
}
