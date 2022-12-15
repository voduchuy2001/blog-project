@extends('admin.layouts.app')
@section('content')
<div class="content">
  <div class="pb-5">
    <div class="row g-4">
      <div class="col-12 col-xxl-6">
        <div class="mb-8">
          <h2 class="mb-2">Your Dashboard</h2>
          <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
        </div>
        <div class="row align-items-center g-4">
          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="admin/assets/img/icons/illustrations/4l.png" alt="" height="46" width="46" />
              <div class="ms-3">
                <h4 class="mb-0">57 posts</h4>
                <p class="text-800 fs--1 mb-0">Awating processing</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="admin/assets/img/icons/illustrations/3l.png" alt="" height="46" width="46" />
              <div class="ms-3">
                <h4 class="mb-0">5 Category</h4>
                <p class="text-800 fs--1 mb-0">On hold</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="admin/assets/img/icons/illustrations/2l.png" alt="" height="46" width="46" />
              <div class="ms-3">
                <h4 class="mb-0">15 Tag</h4>
                <p class="text-800 fs--1 mb-0">Out of stock</p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <footer class="footer position-absolute">
    <div class="row g-0 justify-content-between align-items-center h-100">
      <div class="col-12 col-sm-auto text-center">
        <p class="mb-0 mt-2 mt-sm-0 text-900">Phoenix Admin Dashboard<span class="d-none d-sm-inline-block"></span><span class="mx-1">
      </div>
    </div>
  </footer>
</div>
@endsection