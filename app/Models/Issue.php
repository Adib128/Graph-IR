<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'reference',
        'issueDate',
        'summary',
        'description',
        'vehicle_id'
    ];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }

    public function repair(){
        return $this->hasOne(Issue::class);
    }
}
