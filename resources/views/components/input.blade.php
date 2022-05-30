<?php
    $name = $attributes['name'];
    $type = $attributes['type'];
    $placeholder = $attributes['placeholder'];
    $label = $attributes['label'];
    $old_value = old($name);
    $value = $attributes['value'];
?>
<div class="mt-3 form-group">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" placeholder="{{$placeholder}}">
</div>
@error($name)
    <p class="text-danger">{{$message}}</p>
@endif
