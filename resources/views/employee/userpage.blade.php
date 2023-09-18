<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
  





th,td  {
    text-align: center;
}
.div_design {
  /* border-radius: 5px; */
  
  background-color: #f2f2f2; */
  border: solid;
  padding: 20px;
}





    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('employee.navbar')
        
            <div class="" style=" margin-left: 20px;margin-top:20px; border:solid; width:1310px; ">
                <div class="d-flex" style="margin: 20px;" >
                    <div>
                                        {{-- <label for="" >Photo :</label><br> --}}
                                        @if ($user->profile_photo_path)
                                            <img style="border: solid; border-color: rgb(3, 9, 99); height: 200px; width: 200px;" src="/img/{{$user->profile_photo_path}}" alt="">
                                            @else
                                            <img  style="border: solid; border-color: rgb(3, 9, 99); height: 200px; width: 200px;" src="/img/profile.jpg" alt="">
                                        @endif
                    </div>
                    <div style="margin-left: 20px">
                    
                <b><label for="">Name :</label></b> 
                    <p>{{$user->name}}</p> 

                    <b><label for="">Phone Number :</label></b> 
                    <p>{{$user->phone}}</p> 

                    <b><label for="">Job Title :</label></b> 
                    <p style="text-transform: capitalize;">{{$user->usertype}} of CarServ company</p>  

                    {{-- <b><label for="">Name :</label></b> 
                    {{$user->name}} <br><br> --}}

                    
                        
                </div>

                    

                    

                </div>
                
                <div style="margin-left: 20px; margin-bottom: 20px;">
                        <br>
                        <a href="{{url('/edit_profile')}}" class="btn btn-outline-primary" style="width: 50%; text-transform: capitalize;">Edit Profile</a>
                        <br><br>


                    </div>
                
                
            </div><br>
            @php
                $user=Illuminate\Support\Facades\Auth::user();
                $order=App\Models\Order::where('employee_id',$user->id)->where('order_status','1')->get();
            @endphp
    

            
                <div id="demo" style=" margin:20px; ,width: 85%;">
                <table  class="table" style="color: black">
                            <thead  class="thead-dark" style="background-color: rgb(23, 58, 201)">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Car_Id</th>
                                    <th scope="col">Car_Type</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col"></th>



                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($order as $order)
                                    <tr >
                                        <td style="padding: 20px">{{$order->customer_name}}</td>
                                        <td style="padding: 20px">{{$order->phone}}</td>
                                        <td style="padding: 20px">{{$order->address}}</td>
                                        <td style="padding: 20px">{{$order->car_id}}</td>
                                        <td style="padding: 20px">{{$order->car_type}}</td>
                                        <td style="padding: 20px">{{$order->service}}</td>
                                        <td style="padding: 20px">{{$order->created_at}}</td>
                                        @php
                                            $status=0;
                            
                                            if ($order->order_status==0)
                                                $status='waiting';
                                            else if ($order->order_status==1)
                                                $status='processing';
                                            else $status='done';
                                        @endphp
                                            
                                        
                                        
                                        
                                        <td style="padding: 20px">{{$status}}</td>
                                        <td style="padding: 20px"><a href="{{url('/done',$order->id)}}" class="btn btn-success">done</a></td>
                                    </tr>
                                @endforeach
                                    
                                
                                    
                        </tbody>
                        </table>
            </div>
    
          


            
            
            
    
    





    


    
   
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>