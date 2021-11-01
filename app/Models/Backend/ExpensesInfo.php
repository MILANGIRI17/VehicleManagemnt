<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensesInfo extends Model
{
    use HasFactory;
    protected $fillable=[
        'fuel_cost',
        'driver_allowance', 
        'permits_fees',
        'commission'
    ];

   
            

}
