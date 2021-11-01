<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\VehicleInfo;
use App\Models\Backend\VehicleType;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    public function index(){
        $vehicleTypes=VehicleType::all();
        return view('backend.pages.vehicle_type.index',compact('vehicleTypes'));
    }
    public function add(Request $request){
        if($request->isMethod('get')){
            return view('backend.pages.vehicle_type.create');
        }
        if($request->isMethod('post')){
            $this->validate($request,[
                'vehicle_type'=>'required',
                'pitch_road_cost_per_km'=>'required|numeric',
                'graveled_road_cost_per_km'=>'required|numeric'
            ]);
            $data['vehicle_type']=$request->vehicle_type;
            $data['pitch_road_cost_per_km']=$request->pitch_road_cost_per_km;
            $data['graveled_road_cost_per_km']=$request->graveled_road_cost_per_km;

            if(VehicleType::create($data)){
                return redirect()->route('vehicle_type')->with('success','Data was inserted');
            }
        }

    }
    public function delete(Request $request)
    {
        $id = $request->criteria;
        $totalVehicleTypeCount=VehicleInfo::where('type_id','=',$id)->count();
        if($totalVehicleTypeCount>0){
            return redirect()->back()->with('error','This vehicle type has vehicle info');
        }else{
            if (VehicleType::findOrFail($id)->delete()){
                return redirect()->route('vehicle_type')->with('success', "Data Deleted Successfully");
            }
        }
        
    }
    public function edit(Request $request){
        $id=$request->criteria;
        $vehicleTypes=VehicleType::findOrFail($id);
        return view('backend.pages.vehicle_type.edit',compact('vehicleTypes'));
    }
    public function editAction(Request $request){
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
            $id=$request->criteria;
            $this->validate($request,[
                'vehicle_type'=>'required',
                'pitch_road_cost_per_km'=>'required|numeric',
                'graveled_road_cost_per_km'=>'required|numeric'
            ]);
            $data['vehicle_type']=$request->vehicle_type;
            $data['pitch_road_cost_per_km']=$request->pitch_road_cost_per_km;
            $data['graveled_road_cost_per_km']=$request->graveled_road_cost_per_km;

            if(VehicleType::findOrFail($id)->update($data)){
                return redirect()->route('vehicle_type')->with('success','Data Updated Successfully');
            }else{
                return redirect()->back()->with('error','There was some mistake');
            }
        }
    }

    public function updateVehicleTypeStatus(Request $request)
    {
        
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
        $id=$request->criteria;
        $obj=VehicleType::findOrFail($id);
            if(isset($_POST['active'])){
                $obj->status=0;
                $msgType='error';
                $msg="This is Offline";
            } 
            if(isset($_POST['inactive'])){
                $obj->status=1;
                $msgType='success';
                $msg="This is Online";
            }

            if($obj->update()){
                return redirect()->back()->with($msgType,$msg);
            }
        }
    }


}
