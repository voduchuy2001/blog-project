    <!-- Banner News Area Start -->
    <div class="banner-news">
        <div class="container-fluid p-0">
            <div class="banner-slider-active no-gutters ">
                @foreach ($featuredPosts as $featuredPost)
                <div class="single-sliders">
                    <div class="single-baner-nw mb-30 text-center">
                        <div class="banner-img-cap">
                            <div class="banner-img">
                                <img height="300" width="400" src="{{$featuredPost->fImagePost}}" alt="Dưa Cosmetics">
                            </div>
                            <div class="banner-cap">
                                <p>{{$featuredPost->category->nameCat}}</p>
                               <h3><a href="{{route('post.single',['slugPost' => $featuredPost->slugPost])}}">{{$featuredPost->postTitle}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </div>