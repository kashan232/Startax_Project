<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function addresses()
    {
        return $this->hasMany(ClientAddress::class);
    }
    
    protected $fillable = [
        'admin_or_user_id',
        'personal_details',
        'address_details',
        'bank_details'
    ];
}
