<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Store\File\Reader;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('backend.pages.user.user',compact('users'));
    }

    public function deleteFiles($id){
        $user=User::findOrFail($id);
        $userImage=public_path('uploads/users/'.$user->image);
        if(file_exists($userImage) && is_file($userImage)){
            unlink($userImage);
            return true;
        }
        return true;
    }
    public function edit(Request $request){
        $id=$request->criteria;
        $userData=User::findOrFail($id);
        return view('backend.pages.user.edit',compact('userData'));
    }

    public function editAction(Request $request){
        if($request->isMethod('get')){
        return redirect()->back();  
        }
        if($request->isMethod('post')){
            $id=$request->criteria;
            echo $id;
            $this->validate($request,[
                'name'=>'required|min:3|max:50',
                'username'=>'required|min:3|max:50',[
                    Rule::unique('users','username')->ignore($id)
                ],
                'email'=>'required|email',[
                    Rule::unique('users','username')->ignore($id)
                ],
                'image'=>'mimes:jpg,png,jpeg,gif'
            ]);
            $data['name']=$request->name;
            $data['username']=$request->username;
            $data['email']=$request->email;
           
            if($request->hasFile('image')){
                $file= $request->file('image');
                $ext=$file->getClientOriginalExtension();
                $imageName=md5(microtime()).'.'.$ext;
                $uploadPath=public_path('uploads/users');
                 
                if($this->deleteFiles($id) && $file->move($uploadPath,$imageName)){
                    $data['image']=$imageName;
                }
                
            }
            if(User::findOrFail($id)->update($data)){
                return redirect()->route('user')->with('success','Data was updated');
            }else{
                return redirect()->back()->with('error','There was some problem');
            }
        }
    }
}
