@extends('admin.layouts.app')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Tag</a></li>
                    <li class="breadcrumb-item active">Create tag</li>
                </ol>
            </div>
            <h4 class="page-title">Create tag</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<form action="{{route('tag.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-lg-12">
            <div class="mt-3 mb-3">
                <input type="text" class="form-control" name="nameTag" placeholder="Tag name" maxlength="32"
                    value="{{ old('nameTag') }}">
                @error('nameTag')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    </div>
    <div class="form-group">
        <div class="text-center mb-3">
            <button class="btn btn-success btn-sm">Create</button>
        </div>
    </div>
</form>
@endsection