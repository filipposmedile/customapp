<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [

        'customer_id',
        'customer_name',
        'job_description',
        'price',
        'paid'
    ];

    public function customer(){

        return $this->belongsTo('App\Customer');
    }
}
