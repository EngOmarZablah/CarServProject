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

    <style type="text/css">
    
    
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #f30909;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: rgb(221, 70, 82);
  color: rgb(255, 255, 255);
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: rgb(196, 14, 29);
}

th,td  {
    text-align: center;
}
.div_design {
  /* border-radius: 5px; */
  
  background-color: #f2f2f2;
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

  @include('customer.navpar')




    <div class="div_design">

        <div class="div_design" style=" border:solid;border-color: rgb(3, 9, 99); background-color: rgb(196, 14, 29) ">

                    <h1 class="font_size" style="text-align: center">My Orders</h1>
                    <br>

                    <div class="div_design" >
                    
                        <table  class="table" style="color: black">
                            <thead  class="thead-dark" style="background-color: rgb(23, 58, 201)">
                                <tr>
                                    <th scope="col">#</th>
                                    
                                    <th scope="col">Address</th>
                                    <th scope="col">Car_Id</th>
                                    <th scope="col">Car_Type</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Employee Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Order Status</th>



                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($order as $order)
                                    <tr >
                                        <th style="padding: 20px" scope="row">{{$loop->iteration}}</th>
                                        {{-- <td style="padding: 20px">{{$order->customer_name}}</td>
                                        <td style="padding: 20px">{{$order->phone}}</td> --}}
                                        <td style="padding: 20px">{{$order->address}}</td>
                                        <td style="padding: 20px">{{$order->car_id}}</td>
                                        <td style="padding: 20px">{{$order->car_type}}</td>
                                        <td style="padding: 20px">{{$order->service}}</td>
                                        
                                        @if ($order->order_status==0)
                                            <td style="padding: 20px">-</td>
                                        @else
                                            <td style="padding: 20px">{{$order->name}}</td>
                                        @endif
                                        
                                        
                                        <td style="padding: 20px">{{$order->created_at}}</td>
                                        
                                        <td style="padding: 20px">
                                            @if ($order->order_status==0)
                                                <p style="color:black">waiting</p>
                                            @elseif ($order->order_status==1)
                                                <p style="color:red">processing</p>
                                            @else 
                                                <p style="color:green">done</p>
                                            @endif
                                            
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                    
                                
                                    
                        </tbody>
                        </table>
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