
@props(['type', 'name', 'id', 'label', 'placeHolder'])
<div class="input-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeHolder }}" />
</div>
