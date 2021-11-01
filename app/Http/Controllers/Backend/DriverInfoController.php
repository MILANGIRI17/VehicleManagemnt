<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\DriverInfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DriverInfoController extends Controller
{
    public function index(){
        $driverInfos=DriverInfo::all();
        return view('backend.pages.driver_info.index',compact('driverInfos'));
    }
    public function add(Request $request){
        if($request->isMethod('get')){
            return view('backend.pages.driver_info.create');
        }
        if($request->isMethod('post')){
            $this->validate($request,[
                'driver_name'=>'required',
                'phone'=>'required|unique:driver_infos,phone',
                'email'=>'required|email|unique:driver_infos,email',
                'citizenship_no'=>'required|unique:driver_infos,citizenship_no',
                'license_number'=>'required|numeric|unique:driver_infos,license_number',
                'image' => 'mimes:jpg,gif,jpeg,png'
            ]);

            $data['driver_name']=$request->driver_name;
            $data['phone']=$request->phone;
            $data['email']=$request->email;
            $data['facebook']=$request->facebook;
            $data['whatsapp']=$request->whatsapp;
            $data['citizenship_no']=$request->citizenship_no;
            $data['license_number']=$request->license_number;

            if($request->hasFile('image')){
                $file=$request->file('image');
                $ext=strtolower($file->getClientOriginalExtension());

                $imageName=md5(microtime()).'.'.$ext;
                $uploadPath=public_path('uploads/driver');

                if(!$file->move($uploadPath,$imageName)){
                    return redirect()->back()->with('error','File not uploaded');
                }
                $data['image']=$imageName;
            }
            if(DriverInfo::create($data)){
                return redirect()->route('driver_info')->with('success','Data saved successfully');
            }else{
                return redirect()->back()->with('error','Data can\'nt saved');
            }
        }
    }

    public function deleteFiles($id){
        $findData=DriverInfo::findOrFail($id);
        $imageName=$findData->image;
        $filePath=public_path('uploads/driver/'.$imageName);
        if(file_exists($filePath) && is_file($filePath)){
            unlink($filePath);
        }
        return true;
    }

    public function delete(Request $request){
        $id=$request->criteria;
        if($this->deleteFiles($id) && DriverInfo::findOrFail($id)->delete()){
            return redirect()->route('driver_info')->with('success','Data deleted successfully');
        }
    }

    public function edit(Request $request){
        $id=$request->criteria;
        $driverInfos=DriverInfo::findOrFail($id);
        return view('backend.pages.driver_info.edit',compact('driverInfos'));
    }

    public function editAction(Request $request){
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
            $id=$request->criteria;
            $this->validate($request,[
                'driver_name'=>'required',
                'phone'=>'required',[
                    Rule::unique('driver_infos','phone')->ignore($id)
                ],
                'email'=>'required|email',[
                    Rule::unique('driver_infos','email')->ignore($id)
                ],
                'citizenship_no'=>'required',[
                    Rule::unique('driver_infos','citizenship_no')->ignore($id)
                ],
                'license_number'=>'required|numeric',[
                    Rule::unique('driver_infos','license_number')->ignore($id)
                ],
                'image' => 'mimes:jpg,gif,jpeg,png'
            ]);

            $data['driver_name']=$request->driver_name;
            $data['phone']=$request->phone;
            $data['email']=$request->email;
            $data['facebook']=$request->facebook;
            $data['whatsapp']=$request->whatsapp;
            $data['citizenship_no']=$request->citizenship_no;
            $data['license_number']=$request->license_number;

            if($request->hasFile('image')){
                $file=$request->file('image');
                $ext=strtolower($file->getClientOriginalExtension());
                $imageName=md5(microtime()).'.'.$ext;
                $uploadPath=public_path('uploads/driver');
                if($this->deleteFiles($id) && $file->move($uploadPath,$imageName)){
                    $data['image']=$imageName;
                }
            }

            if(DriverInfo::findOrFail($id)->update($data)){
                return redirect()->route('driver_info')->with('success','Data updated successfully');
            }else{
                return redirect()->back()->with('error','Data was not uploaded');
            }
        }

    }
}
