<div class="top-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-tittle mb-35">
                    <h2>Xem nhiều nhất</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-between">
            <div class="col-lg-8 col-md-8">
                <!-- single-job-content -->
                @foreach ($popularPost as $popularPost)
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{route('post.single',['slugPost' => $popularPost->slugPost])}}">
                                <img height="150" width="200" src="{{$popularPost->fImagePost}}" alt="Dưa Cosmetics">
                            </a>
                        </div>
                        <div class="job-tittle">
                            <span>{{$popularPost->category->nameCat}}</span>
                            <a href="{{route('post.single',['slugPost' => $popularPost->slugPost])}}">
                                <h4>{{$popularPost->postTitle}}</h4>
                            </a>
                            <p>{{$popularPost->shortDes}}...</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @include('client.components.ads')
        </div>
    </div>
</div>