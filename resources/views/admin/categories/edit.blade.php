@extends('admin.layouts.app')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Category</a></li>
                    <li class="breadcrumb-item active">Create category</li>
                </ol>
            </div>
            <h4 class="page-title">Create category</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<form action="{{route('category.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="row">
        <div class="col-lg-12">
            <div class="mt-3 mb-3">
                <input type="text" class="form-control" name="nameCat" placeholder="Category name" maxlength="32"
                    value="{{ $category->nameCat }}">
                @error('nameCat')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <input type="file" accept="image/*" class="form-control" name="fImageCat" value="{{ $category->fImageCat }}">
                @error('fImageCat')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    </div>
    <div class="form-group">
        <div class="text-center mb-3">
            <button class="btn btn-success btn-sm">Update</button>
        </div>
    </div>
</form>
@endsection