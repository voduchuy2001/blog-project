<!-- Header Start -->
<div class="header-area">
    <div class="main-header ">
        <div class="header-top ">
            <div class="container-fluid">
                <div class="col-xl-12">
                    <div class="row d-flex justify-content-lg-between align-items-center">
                        <div class="header-info-left">
                            <li class="d-none d-lg-block">
                                <div class="form-box f-right ">
                                    <input type="text" name="Search" placeholder="Search your interest...">
                                    <div class="search-icon">
                                        <i class="ti-search"></i>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="header-info-mid">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html"><img src="client/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="header-info-right d-flex align-items-center">
                            @if (Auth::user())
                            <ul>
                                <li><a href="{{route('home')}}">Dashboard</a></li>
                            </ul>
                            @else
                            <ul>
                                <li><a href="{{route('login')}}">Log In</a></li>
                            </ul>
                            @endif
                            <!-- Social -->
                            <div class="header-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <!-- logo 2 -->
                        <div class="logo2">
                            <a href="index.html"><img src="client/assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- logo 3 -->
                        <div class="logo3 d-block d-sm-none">
                            <a href="index.html"><img src="client/assets/img/logo/logo-mobile.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu text-center d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    @foreach ($categories as $category)
                                    <li><a href="category.html">{{$category->nameCat}}</a></li>
                                    @endforeach
                                    <li><input class="d-lg-none" type="text" placeholder="Enter title..."></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->