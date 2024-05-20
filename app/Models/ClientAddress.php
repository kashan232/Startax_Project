<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientAddress extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'admin_or_user_id',
        'client_id',
        'flat_door',
        'Premise_name',
        'road_street',
        'pin_code',
        'Area_locality',
        'district',
        'State',
        'Country',
        'mobile_phone',
        'email_address',
        'email_address_secondary'
    ];
}
