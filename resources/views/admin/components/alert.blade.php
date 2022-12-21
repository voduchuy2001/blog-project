@if (session('error'))
<div class="alert alert-danger" role="alert">
    <i class="dripicons-wrong me-2"></i> {{ session('error') }}
</div>
@elseif(session('message'))
<div class="alert alert-success" role="alert">
    <i class="dripicons-checkmark me-2"></i>{{ session('message') }}
</div>
@endif