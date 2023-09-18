<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
    
    
    input[type=text],input[type=password], select {
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
    
      @include('admin.navbar')   
    

    <div class="div_design">

        <div class="div_design" style=" border:solid;border-color: rgb(3, 9, 99); background-color: rgb(196, 14, 29) ">

                    <h1 class="font_size" style="text-align: center">Create Employee</h1>
                    <br>
                    
                    <form style="border: solid; border-color: rgb(3, 9, 99)" action="{{url('/create_employee')}}" method="post" enctype="multipart/form-data">

                        @csrf
                        
                        <div class="div_design">

                            <label for="">User Type :</label>
                            <input class="text_color" type="text" name="usertype" value="employee" readonly  required>
                    
                        </div>

                        

                        <div class="div_design">

                            <label for="">Name :</label>
                            <input class="text_color" type="text" name="name" placeholder="Enter the name..."  required>
                    
                        </div>

                        <div class="div_design">

                            <label for="">Email :</label>
                            <input class="text_color" type="text" name="email" placeholder="Enter the email..."  required>
                        
                        </div>

                        <div class="div_design">

                            <label for="">Phone Number :</label>
                            <input class="text_color" type="text" name="phone" placeholder="Enter the phone number..."  required>
                        
                        </div>

                        <div class="div_design">

                            <label for="">Address :</label>
                            <input class="text_color" type="text" name="address" placeholder="Enter the address..." required>
                        
                        </div>

                        <div class="div_design">

                            <label for="">Password :</label>
                            <input class="text_color" type="password" name="password" placeholder="Enter the password..." required>
                        
                        </div>

                        <div class="div_design">

                            <input type="submit" value="Create Employee" style="text-transform: capitalize;" class="btn btn-primary">

                        </div>  
                        

                        

                    </div>

            </form>


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