
    @if (session('global_status'))
<div class="alert m-0  rounded-0  alert-success alert-dismissible fade show" role="alert">
    {{ session('global_status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session('global_error'))
<div class="alert m-0  rounded-0 alert-danger alert-dismissible fade show" role="alert">
    {{ session('global_error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif


    <header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar bg-khas-secondery">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="topbar-left">
                            <ul class="useful-links">
                                <li><a class="text-white" href="{{url('/')}}">Home</a></li>
                                <li><a class="text-white" href="#">About Us</a></li>
                                <li><a class="text-white" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="topbar-right d-flex justify-content-end align-items-center">

                            @if (auth()->check())
                            <div class="dropdown">
                                <div class="header-profile">
                                    <a href="javascript:void(0)">
                                       <img class="rounded-circle" src="{{ !empty(Auth::user()->photo) ? asset('storage/profile_photos/' . Auth::user()->photo) : asset('storage/profile_photos/default_profile_photo.jpg') }}"  alt="Profile Image" width="30px" height="30px" srcset="">
                                    </a>

                                        <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ Auth::user()->first_name }}
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="{{url('dashboard')}}">Dashboard</a></li>
                                          <li><a class="dropdown-item" href="{{url('profile')}}">Profile</a></li>
                                          <li><a class="dropdown-item" href="{{url('profile_settings')}}">Settings</a></li>
                                          <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
                                        </ul>
                                      </div>
                                </div>


                            @else
                            <ul class="user-login m-0">
                                <li>
                                    <a class="text-white" href="{{url('login')}}">Sign In</a>
                                </li>
                                <li>
                                    <a class="text-white" href="{{url('signup')}}">Register</a>
                                </li>
                            </ul>
                        @endif



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="/">
                            <h1><span class="text-secendory">K</span><span class="text-primary">HAS</span></h1>
                            {{-- <img src="{{asset('images/khas-logo-rec.png')}}" alt="Logo"> --}}
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <!-- Start Main Menu Search -->
                        <div class="main-menu-search">
                            <!-- navbar search start -->
                            <div id="navbar-search" class="navbar-search search-style-5">
                                <div class="search-select">
                                    <div class="select-position">
                                        <select id="select1">
                                            <option selected>--Brand--</option>
                                            <option value="1">Apple</option>
                                            <option value="2">One Plus</option>
                                            <option value="3">Nokia</option>
                                            <option value="4">Oppo</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <input type="text" id="search" placeholder="Search">
                                </div>
                                <div class="search-btn">
                                    <button id="nav-search-btn" class=" btn btn-khas-primary"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                            <!-- navbar search Ends -->
                        </div>
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-5">
                        <div class="middle-right-area col-12">

                            <div class="navbar-cart col-12 d-flex justify-content-end">
                                <div class="wishlist">
                                    <a href="{{url('wishlist')}}">
                                        <i class="bi bi-suit-heart"></i>
                                        <span class="total-items bg-khas-secondery">0</span>
                                    </a>
                                </div>
                                <div class="cart-items">
                                    <a href="{{url('/cart')}}" class="main-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span class="total-items bg-khas-secondery">2</span>
                                    </a>


                                    <!--/ End Shopping Item -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Header Bottom -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="nav-inner">

                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{url("/dashboard")}}" class="active" aria-label="Toggle navigation"><i class="bi bi-house-heart"></i>&nbsp; Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Brands</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="#">Apple</a></li>
                                            <li class="nav-item"><a href="#">Oppo</a></li>
                                            <li class="nav-item"><a href="#">Samaung</a></li>
                                            <li class="nav-item"><a href="#">Nokia</a></li>
                                            <li class="nav-item"><a href="#">Infinix</a></li>

                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Price</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="#">Lessthan RS/5000</a>
                                            </li>
                                            <li class="nav-item"><a href="#">RS/5000 - RS/10,000</a></li>
                                            <li class="nav-item"><a href="#">RS/10,000 - RS/15,000</a></li>
                                            <li class="nav-item"><a href="#">RS/15,000 - RS/20,000</a></li>
                                            <li class="nav-item"><a href="#">RS/20,000 - RS/30,000</a></li>
                                            <li class="nav-item"><a href="#">Morethan RS/30,000</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Ram</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="#">Lessthan 1GB</a></li>
                                            <li class="nav-item"><a href="#">1GB - 3GB</a></li>
                                            <li class="nav-item"><a href="#">3GB - 4GB</a></li>
                                            <li class="nav-item"><a href="#">4GB - 6GB</a></li>
                                            <li class="nav-item"><a href="#">Morethan 6GB</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Storage</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="#">8GB</a>
                                            </li>
                                            <li class="nav-item"><a href="#">16GB</a></li>
                                            <li class="nav-item"><a href="#">32GB</a></li>
                                            <li class="nav-item"><a href="#">64GB</a></li>
                                            <li class="nav-item"><a href="#">128GB or More</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Camera</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="#">Lessthan 8MP</a>
                                            </li>
                                            <li class="nav-item"><a href="#">8MP - 12MP</a></li>
                                            <li class="nav-item"><a href="#">12MP - 20MP</a></li>
                                            <li class="nav-item"><a href="#">20MP - 34MP</a></li>
                                            <li class="nav-item"><a href="#">Morethan 34MP</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Battery</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="#">1000mAh</a>
                                            </li>
                                            <li class="nav-item"><a href="#">1000mAh - 2000mAh</a></li>
                                            <li class="nav-item"><a href="#">2000mAh - 3000mAh</a></li>
                                            <li class="nav-item"><a href="#">3000mAh - 4000mAh</a></li>
                                            <li class="nav-item"><a href="#">Morethan 4000mAh</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Display</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="#">Lessthan 480p</a>
                                            </li>
                                            <li class="nav-item"><a href="#">480p</a></li>
                                            <li class="nav-item"><a href="#">720p</a></li>
                                            <li class="nav-item"><a href="#">1080p</a></li>
                                            <li class="nav-item"><a href="#">Morethan 1080p</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Operating System</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="#">Android</a>
                                            </li>
                                            <li class="nav-item"><a href="#">IOS</a></li>
                                            <li class="nav-item"><a href="#">Windows</a></li>
                                            <li class="nav-item"><a href="#">Others</a></li>

                                        </ul>
                                    </li>





                                </ul>

                            </div> <!-- navbar collapse -->


                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>

            </div>
        </div>
        <!-- End Header Bottom -->
    </header>

