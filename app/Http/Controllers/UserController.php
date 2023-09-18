<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit_profile(){
        $user=Auth::user();
        if ($user->usertype=='customer'){
            $order=Order::where('customer_id',$user->id)->get();
        }
        else if ($user->usertype=='employee'){
            $order=Order::where('employee_id',$user->id)->get();
        }
        else if ($user->usertype=='admin'){
            $order=Order::all();
        }
        return view('home.editProfile',compact('user','order'));
    }


    
    public function update_profile($id , Request $request){
        $user=User::find($id);
        
        $image=$request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('img',$imagename);

            $user->profile_photo_path= $imagename;
        }
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;   
        
        $user->save();
        return redirect()->back();

    }


    public function changePassword(){
        // $user=Auth::user();
        
        return view('customer.change-password');
    }


    public function updatePassword($id,Request $request){
    
        $user =User::find($id);

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|different:old_password',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = bcrypt($request->new_password);
            
            $user->save();

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }


    


    public function allemp(){
        $order=Order::all();
        
        $user=Auth::user();
        $emp=User::where('usertype','employee')->orwhere('usertype','vacation')->get();
        // return $emp;
        
        return view('admin.all_emp',compact('emp','order','user'));
    }

    public function allcus(){
        $user=Auth::user();
        $customer=User::where('usertype','customer')->get();
        return view('admin.all_customer',compact('user','customer'));
    }
    public function editEmployee($id){
        $user=Auth::user();
        $emp=User::find($id);
        return view('admin.editemp',compact('user','emp'));
    }
    // public function deleteemp(){
    //     $user=Auth::user();
    //     return view('admin.test',compact('user'));
    // }


    public function createEmp(){
        $user=Auth::user();
        return view('admin.create_employee',compact('user'));
    }



    
    public function create_employee(Request $request){
        $user=new User;
        $user->usertype=$request->usertype;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect(url('/allemp'));
    }
}