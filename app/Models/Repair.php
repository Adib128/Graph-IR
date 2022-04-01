<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    protected $fillable = [
        'repairDate',
        'summary',
        'details',
        'cost',
        'issue_id',
        'vehicle_id'
    ];

    public function issue(){
        return $this->belongsTo(Issue::class);
    }

    public function vehicle(){
        return $this->BelongsTo(Vehicle::class);
    }
}
