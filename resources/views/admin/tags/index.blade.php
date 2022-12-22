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
                        <li class="breadcrumb-item active">Tag list</li>
                    </ol>
                </div>
                <h4 class="page-title">Tag list</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row mb-2">
        <div class="col-xl-8">
            <form action="admin/search/tag-results"
                class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                <div class="col-auto">
                    <input type="search" class="form-control" name="query" placeholder="Enter key words...">
                </div>
            </form>
        </div>
        <div class="col-xl-4">
            <div class="text-xl-end mt-xl-0 mt-2">
                <a href="{{route('tag.create')}}" class="btn btn-success">New
                    Tag</a>
            </div>
        </div><!-- end col-->
    </div>

    @include('admin.components.alert')

    <div class="table-responsive mb-3">
        <table class="table table-hover table-centered mb-0 text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Posts of Tag</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($tags->count()>0)
                @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->nameTag }}</td>
                    <td>
                        {{$tag->posts->count()}}
                    </td>
                    <td class="table-action">
                        <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="action-icon"><button
                                class="btn btn-warning btn-sm"><i class="uil-edit-alt"></i></button></a>
                                <button class="btn btn-danger btn-sm" onclick="handleDeleteTag({{$tag->id}})"><i
                                    class="uil-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <th class="text-center" colspan="4">Do not have value</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    {{$tags->links('admin.components.pagination')}}

    <!-- Modal delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog" role="document">
            <form action="" method="POST" id="deleteTagForm">
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