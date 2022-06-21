<?php
$label = $attributes['label'];
$name = $attributes['name'];
$old_value = old($name);
$value = $attributes['value'] ?? $old_value;
?>
<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea class="form-control" id="{{ $name }}" placeholder="{{ $attributes['placeholder'] }}"
        name="{{ $name }}" rows="3">{{ $value }}</textarea>
</div>
