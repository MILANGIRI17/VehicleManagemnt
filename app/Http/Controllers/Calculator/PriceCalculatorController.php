<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use App\Models\Backend\VehicleType;
use Illuminate\Http\Request;

class PriceCalculatorController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('get')){
            $vehicleType=VehicleType::all();
            return response()->json([
                'vehicleType'=>$vehicleType,
            ]);
        }  
    }
}
