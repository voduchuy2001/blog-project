@extends('client.layouts.app')
@section('content')
<!-- breadcrumb Start-->
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="/">Tìm kiếm: {{$query}}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
<!-- Top Posts Start -->
<div class="top-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-tittle mb-35">
                    <h2>Tìm kiếm: {{$query}}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-between">
            <div class="col-lg-8 col-md-8">
                <!-- single-job-content -->
                @if ($posts->count() > 0)
                @foreach ($posts as $post)
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{route('post.single',['slugPost' => $post->slugPost])}}"><img height="150"
                                    width="200" src="{{$post->fImagePost}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <span>{{$post->category->nameCat}}</span>
                            <a href="{{route('post.single',['slugPost' => $post->slugPost])}}">
                                <h4>{{$post->postTitle}}</h4>
                            </a>
                            <p>{!!substr($post->metaDes, 0, 50)!!}...</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="single-job-items mb-30">
                    <p>Không tìm thấy kết quả: {{$query}}</p>
                </div>
                @endif
            </div>

            @include('client.components.ads')
        </div>
    </div>
</div>
<!-- Top Posts End -->

{{$posts->links('client.components.pagination')}}
@endsection