<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadSet extends Model
{
    use HasFactory;

    protected $fillable = [
        'MSISDN',
        'USER_NAME',
        'ACTIVITY_TYPE',
        'INSURANCE_PARTNER',
        // Add other attributes that you want to be mass assignable
    ];
}
