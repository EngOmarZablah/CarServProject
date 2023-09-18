<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // (customer) return the order now page
    public function order(){
        $user=Auth::user();
        return view('customer.order',compact('user'));
    }

    
    // (system) get employee to receive order
    protected function getEmp(){

        $res1 = DB::table('users')
            ->select('id')->where('usertype', 'employee')->whereNotIn('id', function ($n) {
                $n->select('employee_id')->from('orders');
            })->get()->first();

        $result = DB::table('orders')
            ->select('employee_id')
            ->where('order_status', 2)
            ->whereIn('employee_id', function ($q) {
                $q->select('id')->from('users')->where('usertype', 'employee')->whereNotIn('id', function ($f) {
                $f->select('employee_id')->from('orders')->where('order_status', 1);
                });
            })->groupBy('orders.employee_id')->orderBy(DB::raw('COUNT(orders.employee_id)'), 'ASC')->get()->first();


        if ($res1 != null || $result != null) {
            if ($res1 != []) {
                return $res1->id;
            } else {
                return $result->employee_id;
            }
        }
        else {
            return 1;
            }

                    
    }   
        
            
    // (customer) create order 
    public function makeOrder(Request $request){
        
        $validated = $request->validate([
        'phone' => 'required|min:10|max:10',
        'address' => 'required',
        'car_id' => 'required',
        'car_type' => 'required',
        'service' => 'required',
        
    ]);
    $emp = $this->getEmp();
  
        $neworder=new Order;
        $neworder->customer_name=Auth::user()->name;
        $neworder->customer_id=Auth::user()->id;
        $neworder->phone=$request->phone;
        $neworder->address=$request->address;
        $neworder->car_id=$request->car_id;
        $neworder->car_type=$request->car_type;
        $neworder->service=implode(' | ',(array) $request['service']);
    


        $neworder->employee_id=$emp;
        
        if($emp==1){
            $neworder->order_status=0;
        }
        else{
            $neworder->order_status=1;
        }

        $neworder->save();

        //-----------

        return redirect()->back();
        

        
    }

    
    // public function editOrder($id , Request $request){

    //     $order=Order::find($id);
    //     if($order->order_status==0){
    //         $order->phone=$request->phone;
    //         $order->address=$request->address;
    //         $order->car_id=$request->car_id;
    //         $order->car_type=$request->car_type;
    //         $order->service=implode(' | ',(array) $request['service']);

    //         $order->save();
    //     }
    // }

    // (customer) get my orders    
    public function my_orders(){
        $user=Auth::user();
        $order=Order::where('customer_id',$user->id)
        ->join('users','orders.employee_id','=','users.id')
        ->select('orders.*','users.name')->orderBy('orders.created_at','desc')->get();
        return view('customer.my_orders',compact('order'));
    }


    
    // (employee) done order
    public function done($id){
        $user=Auth::user();
        $order=Order::find($id);
        $order->order_status=2;
        $order->save();

        $orderOnWait=Order::where('order_status',0)
        ->orderBy('created_at','asc')->first();
        if($orderOnWait){
        $orderOnWait->employee_id=$user->id;
        $orderOnWait->order_status=1;
        $orderOnWait->save();
        }
        
        return redirect()->back();
    }
    

    // (admin) get all orders
    public function allOrders(){
        $order=Order::
        join('users','orders.employee_id','=','users.id')
        ->select('orders.*','users.name','users.phone as empphone')->orderBy('orders.created_at','desc')->get();
        $user=Auth::user();
        return view('employee.orders',compact('order','user'));
    }



    //(employee) get employee orders
    public function empOrders(){
        $user=Auth::user();
        $order=Order::where('employee_id',$user->id)
        ->orderBy('created_at','desc')->get();
        return view('employee.orders',compact('user','order'));
    }


    

}