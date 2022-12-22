<div class="latest-posts mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-tittle mb-35">
                    <h2>Bài viết mới nhất</h2>
                </div>
            </div>
        </div>
        <!-- Slider -->
        <div class="row">
            <div class="col-lg-6">
                <div class="latest-slider">
                    <div class="slider-active">
                        <!-- Single slider -->
                        @foreach ($latestPost1 as $latestPost1)
                        <div class="single-slider">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img text-center">
                                    <img src="{{$latestPost1->fImagePost}}" alt="">
                                    <div class="trend-top-cap">
                                        <span class="bgr" data-animation="fadeInUp" data-delay=".2s"
                                            data-duration="1000ms">{{$latestPost1->category->nameCat}}</span>
                                        <h2><a href="{{route('post.single',['slugPost' => $latestPost1->slugPost])}}"
                                                data-animation="fadeInUp" data-delay=".4s"
                                                data-duration="1000ms">{{$latestPost1->postTitle}}</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- smoll items -->
                <div class="row">
                    @foreach ($latestPost2 as $latestPost2)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-baner-nw2 mb-30 ">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="{{$latestPost2->fImagePost}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-baner-nw2 mb-30">
                            <div class="banner-img-cap2">
                                <div class="banner-cap2 banner-cap3">
                                    <p>{{$latestPost2->category->nameCat}}</p>
                                    <h3><a
                                            href="{{route('post.single',['slugPost' => $latestPost2->slugPost])}}">{{$latestPost2->postTitle}}</a>
                                    </h3>
                                    <p class="normal">{!!substr($latestPost2->postContent, 0, 100)!!}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach ($latestPost3 as $latestPost3)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-baner-nw2 mb-30">
                            <div class="banner-img-cap2">
                                <div class="banner-cap2 banner-cap3">
                                    <p>{{$latestPost3->category->nameCat}}</p>
                                    <h3>
                                        <a href="{{route('post.single',['slugPost' => $latestPost3->slugPost])}}">{{$latestPost3->postTitle}}
                                        </a>
                                    </h3>
                                    <p class="normal">{!!substr($latestPost3->postContent, 0, 100)!!}...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-baner-nw2 mb-30 ">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="{{$latestPost3->fImagePost}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @foreach ($latestPost45 as $latestPost45)
            <div class="col-lg-6">
                <div class="single-baner-nw2 mb-30 text-center">
                    <div class="banner-img-cap2">
                        <div class="banner-img">
                            <img src="{{$latestPost45->fImagePost}}" alt="">
                        </div>
                        <div class="banner-cap2">
                            <p>{{$latestPost45->category->nameCat}}</p>
                            <h3>
                                <a href="{{route('post.single',['slugPost' => $latestPost45->slugPost])}}">{{$latestPost45->postTitle}}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>