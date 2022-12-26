@extends('admin.layouts.app')
@section('content')
<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Update password</li>
                    </ol>
                </div>
                <h4 class="page-title">Update password</h4>
            </div>
        </div>
    </div>

    @include('admin.components.alert')

    <!-- end page title -->
    <form action="{{ route('user.updatePassword') }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="oldPassword" class="form-label">Old password</label>
            <input maxlength="255" placeholder="Old password" type="password" id="oldPassword" class="form-control" name="old_password">
            @error('old_password')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="newPassword" class="form-label">New password</label>
            <input maxlength="255" placeholder="New password" type="password" id="newPassword" class="form-control" name="password">
            @error('password')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm password</label>
            <input maxlength="255" placeholder="Confirm password" type="password" id="password_confirmation" class="form-control"
                name="password_confirmation">
        </div>

        <div class="mb-3 form-group">
            <div class="text-center mb-3">
                <button class="btn btn-success btn-sm">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection