<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\VendorInfo;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class VendorInfoController extends Controller
{
    public function index(){
        $vendorInfos=VendorInfo::all();
        return view('backend.pages.vendor_info.index',compact('vendorInfos'));
    }
    public function add(Request $request){
        if($request->isMethod('get')){
            return view('backend.pages.vendor_info.create');
        }
        if($request->isMethod('post')){
            $this->validate($request,[
                'name'=>'required',
                'phone'=>'required|unique:vendor_infos,phone',
                'email'=>'required|email|unique:vendor_infos,email',
                'bank_info'=>'required|unique:vendor_infos,bank_info'
            ]);

            $data['name']=$request->name;
            $data['phone']=$request->phone;
            $data['email']=$request->email;
            $data['bank_info']=$request->bank_info;

            if(VendorInfo::create($data)){
                return redirect()->route('vendor_info')->with('success','Data saved successfully');
            }
        }
    }

    public function delete(Request $request){
        $id=$request->criteria;
        if(VendorInfo::findOrFail($id)->delete()){
            return redirect()->route('vendor_info')->with('success','Data deleted Successfully');
        }
    }

    public function edit(Request $request){
        $id=$request->criteria;
        $vendorInfo=VendorInfo::findOrFail($id);
        return view('backend.pages.vendor_info.edit',compact('vendorInfo'));
    }

    public function editAction(Request $request){
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
            $id=$request->criteria;
            $this->validate($request,[
                'name'=>'required',
                'email'=>'required|email',[
                    Rule::unique('vendor_infos','email')->ignore($id)
                ],
                'phone'=>'required',[
                    Rule::unique('vendor_infos','phone')->ignore($id)
                ],
                'bank_info'=>'required',[
                    Rule::unique('vendor_infos','bank_info')->ignore($id)
                ]
            ]);
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['phone']=$request->phone;
            $data['bank_info']=$request->bank_info;
            
            if(VendorInfo::findOrFail($id)->update($data)){
                return redirect()->route('vendor_info')->with('success','Data updated successfully');
            }
        }
    }

}
