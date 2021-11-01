<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleInfo extends Model
{
    use HasFactory;
    protected $fillable=[
        'vehicle_no',
        'model',
        'manufacture_date',
        'seat_capacity',
        'color',
        'vehicle_option',
        'wheeler_option',
        'type_id'
    ];

    public function VehicleTypeData(){
        return $this->belongsTo(VehicleType::class,'type_id','id');
    }
}
