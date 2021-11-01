<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Round;
use App\Receipt;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'addres',
        'regularity',
        'telephone',
        'email',
        'description',
        'bank_name',
        'last_time'
    ];

    public function rounds(){

        return $this->hasMany('App\Round');

    }
    public function receipts(){

        return $this->hasMany('App\Receipt');
        
    }
}
