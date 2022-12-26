@extends('admin.layouts.app')
@section('content')
<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Post</a></li>
                        <li class="breadcrumb-item active">Create post</li>
                    </ol>
                </div>
                <h4 class="page-title">Create post</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xl-12">
                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                            <span class="d-none d-md-block">Post elements</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                            <span class="d-none d-md-block">SEO</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="home1">
                        <div class="mb-3">
                            <label for="postTitle" class="form-label">Title</label>
                            <input maxlength="255" type="text" class="form-control" name="postTitle" placeholder="Post title"
                                id="postTitle" value="{{ old('postTitle') }}">
                            @error('postTitle')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="shortDes" class="form-label">Short description</label>
                            <input maxlength="255" type="text" class="form-control" name="shortDes" placeholder="Short description"
                                id="shortDes" value="{{ old('shortDes') }}">
                            @error('shortDes')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="fImagePost" class="form-label">Featured image</label>
                            <input type="file" accept="image/*" class="form-control" name="fImagePost" id="fImagePost"
                                value="{{ old('fImagePost') }}">
                            @error('fImagePost')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="postContent" class="form-label">Post Content</label>
                            <textarea name="postContent" id="postContent">

                                </textarea>
                            <script>
                                function elFinderBrowser (callback, value, meta) {
                                        tinymce.activeEditor.windowManager.openUrl({
                                            title: 'File Manager',
                                            url: 'admin/elfinder/tinymce5',
                                            onMessage: function (dialogApi, details) {
                                                if (details.mceAction === 'fileSelected') {
                                                    const file = details.data.file;
                                                    
                                                    // Make file info
                                                    const info = file.name;
                                                    
                                                    // Provide file and text for the link dialog
                                                    if (meta.filetype === 'file') {
                                                        callback(file.url, {text: info, title: info});
                                                    }
                                                    
                                                    // Provide image and alt text for the image dialog
                                                    if (meta.filetype === 'image') {
                                                        callback(file.url, {alt: info});
                                                    }
                                                    
                                                    // Provide alternative source and posted for the media dialog
                                                    if (meta.filetype === 'media') {
                                                        callback(file.url);
                                                    }
                                                    
                                                    dialogApi.close();
                                                }
                                            }
                                        });
                                    }
                            </script>

                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    skin: "oxide-dark",
                                    content_css: "dark",
                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount fullscreen',
                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | fullscreen',
                                    file_picker_callback: elFinderBrowser
                                });
                            </script>
                        </div>

                        <div class="mb-3">
                            <label for="form-select" class="form-label">Category</label>
                            <select class="form-select selecte2 mb-3" data-toggle="select2" name="category_id"
                                id="category">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nameCat }}</option>
                                @endforeach
                            </select>

                            @error('category_id')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tags">Tags</label>
                            <select name="tags[]" id="tags" class="form-control select2 select2-multiple"
                                data-toggle="select2" multiple="multiple">
                                @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->nameTag}}</option>
                                @endforeach
                            </select>

                            @error('tags')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="form-check" class="form-label">Featured post</label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="satus_yess" name="status"
                                    value="featured">
                                <label class="form-check-label" for="satus_yess">Set featured post</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile1">
                        <div class="mt-3 mb-3">
                            <label for="metaTitle" class="form-label">Meta title</label>
                            <input maxlength="255" type="text" class="form-control" name="metaTitle" placeholder="Meta title"
                                id="postTitle" value="{{ old('metaTitle') }}">
                            @error('metaTitle')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="metaDes" class="form-label">Meta description</label>
                            <input maxlength="255" type="text" class="form-control" name="metaDes" placeholder="Meta description"
                                id="postTitle" value="{{ old('metaDes') }}">
                            @error('metaDes')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="metaKey" class="form-label">Meta keys</label>
                            <input maxlength="255" type="text" class="form-control" name="metaKey" placeholder="Meta key words"
                                id="postTitle" value="{{ old('metaKey') }}">
                            @error('metaKey')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center mb-3">
                            <button class="btn btn-success btn-sm">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection