@if (session('error'))
<div class="alert alert-danger" role="alert">
    <i class="dripicons-wrong me-2"></i> {{ session('error') }}
</div>

@elseif(session('success'))
<div class="alert alert-success" role="alert">
    <i class="dripicons-checkmark me-2"></i>{{ session('success') }}
</div>

@elseif(session('warning'))
<div class="alert alert-warning" role="alert">
    <i class="dripicons-warning me-2"></i>{{ session('warning') }}
</div>
@endif