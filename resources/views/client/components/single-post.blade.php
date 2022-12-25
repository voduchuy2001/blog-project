@extends('client.layouts.app')
@section('metaKey', $post->metaKey)
@section('metaDes', $post->metaDes)
@section('metaTitle', $post->metaTitle)
@section('content')
<!-- breadcrumb Start-->
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="">Bài viết: {{$post->postTitle}}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{$post->fImagePost}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{$post->postTitle}}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><i class="fa fa-tag"></i>
                                @foreach ($post->tags as $tag)
                                <a href="{{route('tag.single', ['slugTag' => $tag->slugTag])}}">{{$tag->nameTag}}</a>
                                @endforeach</a>
                            </li>
                            <li><a href="#"><i class="fa fa-eye"></i> {{$post->countViews}}</a></li>
                        </ul>
                        <p class="excert">
                            {!!$post->postContent!!}
                        </p>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="{{$post->user->avatar}}">
                        <div class="media-body">
                            <a href="{{$post->user->facebookContact}}" target="_blank">
                                <h4>Viết bởi: {{$post->user->fullName}}</h4>
                            </a>
                            <figure>
                                <figcaption class="blockquote-footer">
                                    {{$post->user->aboutMe}}
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            @include('client.components.right-sidebar')
        </div>
    </div>
</section>
<!-- Blog Area End -->
@endsection