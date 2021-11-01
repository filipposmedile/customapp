<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Round extends Model
{
    use HasFactory;

    protected $fillable = [

        'details',
        'date'
    ];

    public function customers(){

        return $this->hasMany('App\Customer');
        
    }
}
