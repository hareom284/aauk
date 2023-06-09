<div>
    <label for="{{ $name }}">{{$label}}</label>
    <input type="{{ $type }}" class="form-control @error('email') is-invalid  @enderror" value="" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}">

    @error($name)
        <div class="invalid-feedback">
            {{ $message->first() }}
        </div>
    @enderror
</div>
