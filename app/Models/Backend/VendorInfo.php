<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorInfo extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'phone',
        'email',
        'bank_info'
    ];
}
