@extends('admin.layouts.app')
@section('content')
<div class="container">
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
                <div class="mb-3">
                    <label for="nameTag" class="form-label">Tag name</label>
                    <input type="text" class="form-control" id="nameTag" name="nameTag" placeholder="Tag name"
                    maxlength="255" value="{{ old('nameTag') }}">
                    @error('nameTag')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="text-center mb-3">
                        <button class="btn btn-success btn-sm">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection