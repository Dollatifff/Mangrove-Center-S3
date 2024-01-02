
<div class="form-group mb-3">
    <label for="{{ $name ?? '' }}">{{ $label ?? '' }}</label>
    <textarea  
        id="{{ $name ?? '' }}" 
        cols="30" rows="10" 
        class="form-control @error($name ?? '') is-invalid @enderror" 
        placeholder="{{ $placeholder ?? '' }}">@isset($value){{ $value }}@else{{ old($name ?? '') }}@endisset</textarea>

    @error($name ?? '') 
    <span class="text-danger float-end" style="font-size: 11px">{{ $message }}</span>
     @enderror
    
</div>
    
