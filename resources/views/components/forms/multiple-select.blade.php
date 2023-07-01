<label for="{{ $name }}">
    {{ $label }}</label>
<select class="form-control" name="{{ $name }}[]" multiple aria-label="multiple select example">
    <option value="0">Please Select</option>
    @foreach ($items as $index => $item)
        <option value="{{ $item->name }}"
            @if (in_array($item->name, $value)) selected @endif>
            {{ $item->name }}
        </option>
    @endforeach
</select>
