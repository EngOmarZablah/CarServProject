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
  width: 100%;
  background-color: rgb(226, 36, 52);
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

.div_design {
  /* border-radius: 5px; */
  background-color: #f2f2f2;
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

        <div class="div_design" style="border:solid;border-color: rgb(3, 9, 99); background-color: rgb(196, 14, 29) ">

                    <h1 class="font_size" style="text-align: center">Make Order</h1>
                    <br>
                    <form style="border: solid; border-color: rgb(3, 9, 99);" onsubmit="return handleData()" action="{{url('/makeOrder')}}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="div_design">

                            <label for="">Name :</label>
                            <input class="text_color" type="text" name="name" placeholder="{{$user->name}}" readonly value="{{$user->name}}">
                    
                        </div>

                        <div class="div_design">

                            <label for="">Phone Number :</label>
                            <input class="text_color" type="text" name="phone" placeholder="{{$user->phone}}" readonly value="{{$user->phone}}">
                        
                        </div>

                        <div class="div_design">

                            <label for="">Address :</label>
                            <input style="" class="text_color" type="text" name="address" placeholder="Write your Address" required >
                        
                        </div>

                        <div class="div_design">

                            <label for="">Car Type :</label>
                            <input class="text_color" type="text" name="car_type" placeholder="Write a Car Type" >
                                
                        </div>

                        <div class="div_design">

                            <label for="">Car ID :</label>
                            <input class="text_color" type="text" min="0" name="car_id" placeholder="Write Car ID" required>
                            
                        </div>

                    

                        <div class="div_design">

                            <label for="" >Choose a Service :</label><br>

                            <input type="checkbox" id="wash" name="service[]" value="wash">
                            <label for="wash">Wash</label><br>
                            <input type="checkbox" id="insurance" name="service[]" value="insurance">
                            <label for="insurance">Insurance</label><br>
                            <input type="checkbox" id="maintenance" name="service[]" value="maintenance">
                            <label for="maintenance">Maintenance</label><br>
                            <input type="checkbox" id="license" name="service[]" value="license">
                            <label for="license">License</label><br><br>
                            <p id="chk_option_error" style="visibility: hidden; color: red;">please select at least one service</p>

                        </div>

                        
                        


                        <div class="div_design">

                            <input id="submit" type="submit"  value="Order Now" class="btn btn-primary">
                            
                        </div>


                    </div>
                    

            </form>


        </div>


    </div>
<script>
function handleData()
{
    var form_data = new FormData(document.querySelector("form"));
    if(!form_data.has("service[]"))
    {
        document.getElementById("chk_option_error").style.visibility = "visible";
      return false;      
    }
    else
    {
        document.getElementById("chk_option_error").style.visibility = "hidden";
      return true;
    }

}
</script>


{{-- <div style="margin-block: 5px; position:fix ;">
            <a href="" class="btn btn-primary py-3 px-5" style="text-transform: capitalize; margin-inline-start: 1140px;" ">Order Now</a>
        </div> --}}



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