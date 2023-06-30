<label for="{{ $name }}" @class(['d-none' => $label == '' ? true : false])>
    {{ $label }}</label>
<input type="{{ $type }}"
    class="form-control {{ $className }}
    value={{ $value }}
    @error('email') is-invalid  @enderror"
    value="{{ $value }}" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}">

@error($name)
    <div class="invalid-feedback">
        {{ $message->first() }}
    </div>
@enderror
