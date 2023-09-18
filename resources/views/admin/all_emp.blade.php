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
    
        @include('admin.navbar')
    
    


        

    <div  class="col py-3">
            <div class="div_design">

        <div class="div_design" style=" border:solid;border-color: rgb(3, 9, 99); background-color: rgb(196, 14, 29) ">
                        <h1 class="font_size" style="text-align: center">All Employees</h1>

                        <a href="{{url('/createEmp')}}" class="btn btn-primary" 
                        style="margin-left: 1000px; width: 20%; height: 60px; margin-bottom: 30px; padding-top: 17px;
                         background-color:rgb(14, 20, 105);">Add Employee</a>
                    <br>

                    <div class="div_design" >
                    
                        <table  class="table" style="color: black">
                            <thead  class="thead-dark" style="background-color: rgb(23, 58, 201); ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">status</th>
                                    <th scope="col"># of orders</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>



                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($emp as $emp )
                                    
                                    <tr >
                                        
                                        <th style="padding: 20px" scope="row">{{$loop->iteration}}</th>
                                        <td style="padding: 20px">{{$emp->name}}</td>
                                        <td style="padding: 20px">{{$emp->email}}</td>
                                        <td style="padding: 20px">{{$emp->phone}}</td>
                                        <td style="padding: 20px">{{$emp->address}}</td>
                                        <td style="padding: 20px">{{$emp->usertype}}</td>
                                        <td style="padding: 20px">
                                              @php
                                                  echo $order=App\Models\Order::where('employee_id',$emp->id)->where('order_status',2)->count();
                                              @endphp  
                                        
                                        </td> 
                                        <td style="padding: 20px">
                                        <a href="{{url('/editemp',$emp->id)}}">Edit</a>
                                        </td>
                                        <td style="padding: 20px">
                                        <a href="{{url('/deleteemp')}}">Delete</a>
                                        </td>
                                        
                                    </tr>
                                    </a>
                                @endforeach
                                    
                                
                                    
                        </tbody>
                        </table>
                    </div>
                    


        </div>


    </div>
        
    </div>
    


























    </div>
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