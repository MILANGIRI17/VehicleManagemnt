<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use HasFactory;
    protected $fillable=[
        'vehicle_type',
        'pitch_road_cost_per_km',
        'graveled_road_cost_per_km',
        'status'
    ];

    public function vehicleInfoData(){
        return $this->hasMany(VehicleInfo::class,'type_id');
    }
}
