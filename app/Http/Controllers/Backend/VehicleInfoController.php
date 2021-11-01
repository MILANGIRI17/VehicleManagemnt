<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\VehicleInfo;
use App\Models\Backend\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VehicleInfoController extends Controller
{
    public function index(){
        $vehicleInfos=VehicleInfo::all();
        return view('backend.pages.vehicle_info.index',compact('vehicleInfos'));
    }

    public function add(Request $request){
        if($request->isMethod('get')){
            $vehicleTypeData=VehicleType::all();
            return view('backend.pages.vehicle_info.create',compact('vehicleTypeData'));
        }
        if($request->isMethod('post')){
            $this->validate($request,[
                'vehicle_no'=>'required|unique:vehicle_infos,vehicle_no',
                'model'=>'required',
                'manufacture'=>'required',
                'seat_capacity'=>'required',
                'color'=>'required',
                'vehicle_option'=>'required',
                'wheeler_option'=>'required'
            ]);
            $data['vehicle_no']=$request->vehicle_no;
            $data['model']=$request->model;
            $data['manufacture_date']=$request->manufacture;
            $data['seat_capacity']=$request->seat_capacity;
            $data['color']=$request->color;
            $data['vehicle_option']=$request->vehicle_option;
            $data['wheeler_option']=$request->wheeler_option;
            $data['type_id']=$request->type_id;

            if(VehicleInfo::create($data)){
                return redirect()->route('vehicle_info')->with('success','Data inserted Successfully');
            }else{
                return redirect()->back()->with('error','There was a problem');
            }
        }
    }

    public function delete(Request $request)
    {
        $id = $request->criteria;
        if (VehicleInfo::findOrFail($id)->delete()){
            return redirect()->route('vehicle_info')->with('success', "Data Deleted Successfully");
        }   
    }

    public function edit(Request $request){
        $id=$request->criteria;
        $vehicleInfo=VehicleInfo::findOrFail($id);
        $vehicleTypeData=VehicleType::all();
        return view('backend.pages.vehicle_info.edit',compact('vehicleInfo','vehicleTypeData'));
    }

    public function editAction(Request $request){
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
            $id=$request->criteria;
            $this->validate($request,[
                'vehicle_no'=>'required',[
                    Rule::unique('vehicle_infos','vehicle_no')->ignore($id)
                ],
                'model'=>'required',
                'manufacture'=>'required',
                'seat_capacity'=>'required',
                'color'=>'required',
                'vehicle_option'=>'required',
                'wheeler_option'=>'required'
            ]);
            $data['vehicle_no']=$request->vehicle_no;
            $data['model']=$request->model;
            $data['manufacture_date']=$request->manufacture;
            $data['seat_capacity']=$request->seat_capacity;
            $data['color']=$request->color;
            $data['vehicle_option']=$request->vehicle_option;
            $data['wheeler_option']=$request->wheeler_option;
            $data['type_id']=$request->type_id;

            if(VehicleInfo::findOrFail($id)->update($data)){
                return redirect()->route('vehicle_info')->with('success','Data Updated Successfully');
            }else{
                return redirect()->back()->with('error','There was a problem');
            }
        }
    }
}
