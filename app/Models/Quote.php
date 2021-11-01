<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [

        'customer_id',
        'customer_name',
        're',
        'job_description',
        'price'
    ];

}
