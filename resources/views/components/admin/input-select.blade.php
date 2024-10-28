@props(['name', 'label', 'values', 'displayColumn' => 'name', 'oldvalue' => null, 'multiple' => false])

<div {{ $attributes->merge(['class' => 'form-group mt-3']) }}>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select name="{{ $multiple ? $name . '[]' : $name }}" id="{{ $name }}"
        @if ($multiple) multiple @endif class="form-select">
        <option value="" selected>Select...</option>
        {{ $slot }}
        @foreach ($values as $value)
            <option value="{{ $value->id }}"
                @if ($multiple && in_array($value->id, (array) old($name, $oldvalue))) selected @elseif (!$multiple && $value->id == old($name, $oldvalue)) selected @endif>
                {{ $value->$displayColumn }}
            </option>
        @endforeach

    </select>
    @if ($errors->has($name))
        <div class="form-text text-danger">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
