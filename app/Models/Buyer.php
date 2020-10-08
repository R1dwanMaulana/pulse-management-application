<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buyer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'number', 'price'
    ];

    protected $hidden = [

    ];

    
}
