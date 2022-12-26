@extends('admin.layouts.app')
@section('content')
<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Update setting</li>
                    </ol>
                </div>
                <h4 class="page-title">Update setting</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    @include('admin.components.alert')

    <form action="{{ route('setting.updateSetting') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="tab-content">
            <div class="tab-pane show active" id="input-types-preview">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Site name</label>
                            <input placeholder="webName" id="webName" type="text" class="form-control" name="webName"
                                value="{{$settings->webName}}">
                            @error('webName')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="webDes" class="form-label">Site description</label>
                            <input placeholder="webDes" id="webDes" type="text" class="form-control" name="webDes"
                                value="{{$settings->webDes}}">
                            @error('webDes')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input placeholder="Facebook" id="facebook" type="text" class="form-control" name="facebook"
                                value="{{$settings->facebook}}">
                            @error('facebook')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Youtube" class="form-label">Youtube</label>
                            <input placeholder="Youtube" type="text" id="Youtube" class="form-control" name="youtube"
                                value="{{$settings->youtube}}">
                            @error('Youtube')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Instagram" class="form-label">Instagram</label>
                            <input placeholder="Instagram" type="text" id="instagram" class="form-control"
                                name="instagram" value="{{$settings->instagram}}">
                            @error('instagram')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Pinterest" class="form-label">Pinterest</label>
                            <input placeholder="Pinterest" type="text" id="Pinterest" class="form-control"
                                name="pinterest" value="{{$settings->pinterest}}">
                            @error('pinterest')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ads" class="form-label">Ads</label>
                            <input id="ads" type="file" accept="image/*" class="form-control" name="ads"
                                value="{{$settings->ads}}">
                            @error('ads')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="altAds" class="form-label">Description of the advertisement</label>
                            <input placeholder="Description of the advertisement" type="text" id="altAds"
                                class="form-control" name="altAds" value="{{$settings->altAds}}">
                            @error('altAds')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="backLinkAds" class="form-label">Ads backlinks</label>
                            <input placeholder="Ads backlinks" type="text" id="backLinkAds" class="form-control"
                                name="backLinkAds" value="{{$settings->backLinkAds}}">
                            @error('backLinkAds')
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