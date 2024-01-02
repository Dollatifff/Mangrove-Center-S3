
<div class="form-group mb-3">
    <label for="{{ $name ?? '' }}">{{ $label ?? '' }}</label>
    <input type="{{ $type ?? '' }}" name="{{ $name ?? '' }}" value="@isset($value){{ $value }}@else{{ old($name) }}@endisset" class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder ?? '' }}">
    @error($name)
    <span class="text-danger float-end" style="font-size: 11px">{{ $message }}</span>
@enderror
</div>