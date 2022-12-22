@extends('client.layouts.app')
@section('content')
    @include('client.components.featured-post')
    
    @include('client.components.latest-post')

    @include('client.components.category-slide')

    @include('client.components.trending-post')
@endsection