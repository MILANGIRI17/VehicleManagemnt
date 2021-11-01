<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverInfo extends Model
{
    use HasFactory;
    protected $fillable=[
        'driver_name',
        'phone',
        'email',
        'facebook',
        'whatsapp',
        'image',
        'citizenship_no',
        'license_number'
    ];
}
