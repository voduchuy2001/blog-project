@extends('admin.layouts.app')
@section('content')
<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Category</a></li>
                        <li class="breadcrumb-item active">Category list</li>
                    </ol>
                </div>
                <h4 class="page-title">Category list</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row mb-2">
        <div class="col-xl-12">
            <div class="text-xl-end mt-xl-0 mt-2">
                <a href="{{route('category.create')}}" class="btn btn-success">New
                    Category</a>
            </div>
        </div><!-- end col-->
    </div>

    @if (session('message'))
    <div class="alert alert-success" role="alert">
        <i class="dripicons-checkmark me-2"></i> {{ session('message') }}
    </div>
    @endif

    <div class="table-responsive mb-3">
        <table class="table table-hover table-centered mb-0 text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Featured Image</th>
                    <th>Posts of Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($categories->count()>0)
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nameCat }}</td>
                    <td>
                        <img class="avatar-lg rounded" src="{{ $category->fImageCat }}" alt="Image">
                    </td>
                    <td>
                        {{-- {{$category->posts->count()}} --}}
                    </td>
                    <td class="table-action">
                        <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="action-icon"><button
                                class="btn btn-warning btn-sm"><i class="uil-edit-alt"></i></button></a>
                        <button class="btn btn-danger btn-sm" onclick="handleDeleteCategory({{$category->id}})"><i
                                class="uil-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <th class="text-center" colspan="10">Do not have value</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    {{$categories->links('admin.components.pagination')}}

    <!-- Modal delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog" role="document">
            <form action="" method="POST" id="deleteCategoryForm">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModal">Confirm</h5>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <h5>Are you sure?</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection