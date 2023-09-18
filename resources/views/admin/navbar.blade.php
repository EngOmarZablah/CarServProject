
<!-- Navbar Start -->
  
    <nav  class="navbar navbar-expand-lg bg-white  navbar-light shadow sticky-top p-1">

        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary" style="font-size: 45px;"><i class="fa fa-car me-3 "></i>CarServ</h2>
            
        </a>
        
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse"  id="navbarCollapse">
            
            <div  class="navbar-nav ms-auto p-4 p-lg-0">
                
                <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.html" class="dropdown-item">Booking</a>
                        <a href="team.html" class="dropdown-item">Technicians</a>
                        <a href="testimonial.html" class="dropdown-item active">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                @php
                    $order=App\Models\Order::all();
                @endphp
               <a href="{{url('/allorders')}}"  class="nav-item nav-link active">all Orders {{$order->count()}}</a>
                
                {{-- <a href="/order" class="nav-item nav-link btn-primary px-5 " style="color:aliceblue; text-transform: capitalize;  ">Order Now</a> --}}
            
            </div>
                <nav style="width: 150px; margin-left: 50px" class="navbar  navbar-expand-sm">
                {{-- <li   class="nav-item dropdown"> --}}
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"   role="button"
                            data-bs-toggle="dropdown" aria-expanded="">
                            {{-- @php
                                
                                // $user = Auth::user();
                            @endphp --}}
                            {{-- @if ($user->image) --}}
                            @if ($user->profile_photo_path)
                                <img class="rounded-circle"  style="height: 70px; width: 70px; "  src="/img/{{$user->profile_photo_path}}" alt="Profile Image">
                            @else
                            <img class="rounded-circle"  style="height: 70px; width: 70px; "  src="img/profile.jpg" alt="Profile Image">                               
                            @endif
                                
                            {{-- @endif --}}

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{url('/redirect')}}"><h5 class="dropdown-item">  {{$user->name}}  </h5></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{url('/edit_profile')}}">edit profile</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li><a class="dropdown-item" href="{{url('/logout')}}">logout</a></li>
                        </ul>
                    {{-- </li> --}}
                </ul>
            </div>
            

            <svg xmlns="http://www.w3.org/2000/svg" style="margin-left  : 10px" width="20" height="96" viewBox="0 0 103 96"
                        fill="none">
                        <path d="M30.7457 -2.16554C30.7457 82.9608 -33.463 135.253 30.7457 51.9505L101.375 -35"
                            stroke="white" stroke-width="3" />
                    </svg>    
        </div>
            <div>
   
        </div>

    </nav>
    <!-- Navbar End -->
