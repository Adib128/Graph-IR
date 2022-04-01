<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'registrationNumber',
        'make',
        'model',
        'type',
        'consumptionType',
        'transmission',
        'purchaseDate'
    ];

    public function issues(){
        return $this->hasMany(Issue::class);
    }

    public function repairs(){
        return $this->hasMany(Repair::class);
    }
}
