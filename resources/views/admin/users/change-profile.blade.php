@extends('admin.layouts.app')
@section('content')
<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Update profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Update profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    @include('admin.components.alert')

    <form action="{{ route('user.updateProfile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="tab-content">
            <div class="tab-pane show active" id="input-types-preview">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input placeholder="Email" id="email" type="email" readonly class="form-control" name="email"
                                value="{{$user->email}}">
                            @error('email')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full name</label>
                            <input placeholder="Full name" id="fullName" type="text" class="form-control"
                                name="fullName" value="{{$user->fullName}}">
                            @error('fullName')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="facebookContact" class="form-label">Link facebook</label>
                            <input placeholder="Link facebook" type="text" id="facebookContact" class="form-control"
                                name="facebookContact" value="{{$user->facebookContact}}">
                            @error('facebookContact')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="instagramContact" class="form-label">Link instagram</label>
                            <input placeholder="Link instagram" type="text" id="instagramContact" class="form-control"
                                name="instagramContact" value="{{$user->instagramContact}}">
                            @error('instagramContact')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="youtubeContact" class="form-label">Link youtube</label>
                            <input placeholder="Link youtube" type="text" id="youtubeContact" class="form-control"
                                name="youtubeContact" value="{{$user->youtubeContact}}">
                            @error('youtubeContact')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="pinterestContact" class="form-label">Link pinterest</label>
                            <input placeholder="Link pinterest" type="text" id="pinterestContact" class="form-control"
                                name="pinterestContact" value="{{$user->pinterestContact}}">
                            @error('pinterestContact')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone number</label>
                            <input min="10" placeholder="Phone number" type="text" id="phoneNumber" class="form-control"
                                name="phoneNumber" value="{{$user->phoneNumber}}">
                            @error('phoneNumber')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="aboutMe" class="form-label">About you</label>
                            <textarea placeholder="About you" type="text" id="aboutMe" rows="5" class="form-control"
                                name="aboutMe">{{$user->aboutMe}}</textarea>
                            @error('aboutMe')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 form-group">
                            <div class="text-center mb-3">
                                <button class="btn btn-success btn-sm">Update</button>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end preview-->
        </div>
    </form>
</div>
@endsection