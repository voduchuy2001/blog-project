@extends('admin.layouts.app')
@section('content')
<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Search</a></li>
                        <li class="breadcrumb-item active">Search: {{$query}}</li>
                    </ol>
                </div>
                <h4 class="page-title">Search: {{$query}}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row mb-2">
        <div class="col-xl-8">
            <form action="admin/search/post-results"
                class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                <div class="col-auto">
                    <input type="search" class="form-control" name="query" placeholder="Enter key words...">
                </div>
            </form>
        </div>
        <div class="col-xl-4">
            <div class="text-xl-end mt-xl-0 mt-2">
                <a href="{{route('post.create')}}" class="btn btn-success">New
                    Post</a>
            </div>
        </div><!-- end col-->
    </div>

    @include('admin.components.alert')

    <div class="table-responsive mb-3">
        <table class="table table-hover table-centered mb-0 text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Featured Image</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($posts->count()>0)
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->postTitle }}</td>
                    <td>
                        <img class="avatar-lg rounded" src="{{ $post->fImagePost }}" alt="Image">
                    </td>
                    <td>
                        <a class="badge bg-light text-info rounded-pill"
                            href="{{ route('category.edit', $post->category->id) }}">{{$post->category->nameCat}}
                        </a>
                    </td>
                    <td>
                        @foreach ($post->tags as $tag)
                        <a href="{{ route('tag.edit', ['id' => $tag->id]) }}"><span
                                class="badge badge-success-lighten rounded-pill">{{ $tag->nameTag }}</span></a>
                        @endforeach
                    </td>
                    <td>
                        @if ($post->status == 'featured')
                        <a class="btn btn-danger btn-sm badge badge-danger-lighten rounded-pill">Featured</a>
                        @else
                        <a class="btn btn-info btn-sm badge badge-info-lighten rounded-pill">Non featured</a>
                        @endif
                    </td>
                    <td class="table-action">
                        <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="action-icon"><button
                                class="btn btn-warning btn-sm"><i class="uil-edit-alt"></i></button></a>
                        <button class="btn btn-danger btn-sm" onclick="handleDeletePost({{$post->id}})"><i
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

    {{$posts->links('admin.components.pagination')}}

    <!-- Modal delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog" role="document">
            <form action="" method="POST" id="deletePostForm">
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