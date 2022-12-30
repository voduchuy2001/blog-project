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
                                    <form action="/ket-qua" method="get">
                                        <input type="text" name="query" placeholder="Nhập từ khóa...">
                                        <div class="search-icon">
                                            <i class="ti-search"></i>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </div>
                        <div class="header-info-mid">
                            <!-- logo -->
                            <div class="logo">
                                <a href="/"><img src="client/assets/img/logo/logo1.png" alt=""></a>
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
                                @include('client.components.media')
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
                            <a href="/"><img src="client/assets/img/logo/logo1.png" alt=""></a>
                        </div>
                        <!-- logo 3 -->
                        <div class="logo3 d-block d-sm-none">
                            <a href="/"><img src="client/assets/img/logo/logo-mobile1.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu text-center d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    @foreach ($categories as $category)
                                    <li><a
                                            href="{{route('category.single',['slugCat' => $category->slugCat])}}">{{$category->nameCat}}</a>
                                    </li>
                                    @endforeach
                                    <li>
                                        <form action="/ket-qua" method="get">
                                            <input class="d-lg-none" type="text" name="query"
                                                placeholder="Nhập từ khóa...">
                                        </form>
                                    </li>
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