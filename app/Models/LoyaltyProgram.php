<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoyaltyProgram extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'LoyaltyID',
        'Points',
        'MembershipLevel',
        'PassengerID',
       
    ];
}
