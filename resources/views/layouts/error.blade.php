@if(isset($error) && !empty($error))
<div class="my-2">
    <div class="alert alert-info">
        {{ $error }}
    </div>
</div>
@endif
@if(isset($success))
<div class="my-2">
    <div class="alert alert-success">
        {{ $success }}
    </div>
</div>
@endif