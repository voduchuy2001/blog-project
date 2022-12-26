@extends('client.layouts.app')
@section('webDes', $settings->webDes)
@section('content')
@include('client.components.featured-post')

@include('client.components.latest-post')

@include('client.components.category-slide')

@include('client.components.popular-post')
@endsection