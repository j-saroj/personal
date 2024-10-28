@props([
    'name',
    'type' => 'text',
    'myimage' => null,
    'placeholder' => null,
    'oldvalue' => null,
    'label' => null,
    'pattern' => null,
    'required' => false,
])
<div {{ $attributes->merge(['class' => 'mt-3 form-group']) }}>
    <label for="{{ $name }}" class="form-label" style="font-size:17px;">{{ $label }}</label>
    @if ($myimage)
        <x-admin.image-view :imageurl="$myimage" />
    @endif
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $name }}"
        value="{{ old($name, $oldvalue) }}" class="form-control" aria-describedby="defaultFormControlHelp"
        @if ($required) required @endif>
    @if ($errors->has($name))
        <div id="defaultFormControlHelp" class="form-text text-danger">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
