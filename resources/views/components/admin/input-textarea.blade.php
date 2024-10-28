@props(['name', 'oldvalue' => null, 'label' => null])
<div class="form-group">
    <label for="{{$name}}" style="font-size:17px;">{{$label}}</label>
    <textarea name="{{$name}}" id="{{$name}}" cols="50" rows="10" style="font-size: 17px; margin-top:20px;">{{old($name,$oldvalue)}}</textarea>
    @if ($errors->has($name))
        <div id="defaultFormControlHelp" class="form-text text-danger" style="font-size:10px;">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
