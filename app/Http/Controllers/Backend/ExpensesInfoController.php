<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\ExpensesInfo;
use Illuminate\Http\Request;

class ExpensesInfoController extends Controller
{
    public function index(){
        $expensesInfos=ExpensesInfo::all();
        return view('backend.pages.expenses_info.index',compact('expensesInfos'));
    }
    public function add(Request $request){
        if($request->isMethod('get')){
            return view('backend.pages.expenses_info.create');
        }
        if($request->isMethod('post')){

            $this->validate($request,[
                'fuel_cost'=>'required|numeric',
                'driver_allowance'=>'required|numeric',
                'permits_fees'=>'required|numeric',
                'commission'=>'required|numeric'
            ]);
            $data['fuel_cost']=$request->fuel_cost;
            $data['driver_allowance']=$request->driver_allowance;
            $data['permits_fees']=$request->permits_fees;
            $data['commission']=$request->commission;
            if(ExpensesInfo::create($data)){
                return redirect()->route('expenses_info')->with('success','Data saved successfully');
            }else{
                return redirect()->back()->with('error','There was some problem');
            }
        }
    }

    public function delete(Request $request){
        
        $id=$request->criteria;
        if(ExpensesInfo::findOrFail($id)->delete()){
            return redirect()->route('expenses_info')->with('success','Data deleted successfully');
        }else{
            return redirect()->back()->with('error','Sorry Data can\'t be deleted');
        }
    }

    public function edit(Request $request){
        $id=$request->criteria;
        $expensesInfo=ExpensesInfo::findOrFail($id);
        return view('backend.pages.expenses_info.edit',compact('expensesInfo'));
    }

    public function editAction(Request $request){
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
            $id=$request->criteria;
            $this->validate($request,[
                'fuel_cost'=>'required|numeric',
                'driver_allowance'=>'required|numeric',
                'permits_fees'=>'required|numeric',
                'commission'=>'required|numeric'
            ]);
            $data['fuel_cost']=$request->fuel_cost;
            $data['driver_allowance']=$request->driver_allowance;
            $data['permits_fees']=$request->permits_fees;
            $data['commission']=$request->commission;
            
            if(ExpensesInfo::findOrFail($id)->update($data)){
                return redirect()->route('expenses_info')->with('success','Data Updated Successfully');
            }else{
                return redirect()->back()->with('error','There was a problem');
            }
        }
    }
}
