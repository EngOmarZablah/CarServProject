<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{



    
    public function index(){
        if(Auth::user()){  
            return redirect(url('/redirect'));          
        }
        else {
        return view('home.welcom');
        }
    }


    //redirect to user page
    public function redirect(){
        if(Auth::user()){ 
            $usertype=Auth::user()->usertype;
            $user=Auth::user();
            $order=Order::where('customer_id',$user->id)->get();
            if($usertype=='customer'){
                return view('customer.userpage',compact('user','order'));
            }
            else if($usertype=='employee'){
                $order=Order::where('employee_id',$user->id)->get();
                return view('employee.userpage',compact('user','order'));
            }
            else if($usertype=='admin'){
                $order=Order::all();
                return view('admin.userprofile',compact('user','order'));
            }
        }
        else return view('auth.login');
        
    }
    
    
    
    //logout
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    
}

    