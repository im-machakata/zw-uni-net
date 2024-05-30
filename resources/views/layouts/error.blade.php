@if((isset($error) && !empty($error)) || $errors->any())
<div class="my-2">
    <div class="alert alert-info">
        {{ $error ?? $errors->first()}}
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