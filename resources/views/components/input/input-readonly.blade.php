<div class="form-group mb-3">
    <label for="">{{ $label }}</label>
    <input 
        type="{{ $type }}" 
        class="form-control @error($field) is-invalid @enderror" 
        id={{ $id ?? '' }} 
        name="{{ $field }}" 
        value="{{ old($field) }}"
        placeholder="{{ $placeholder ?? '' }}" 
        readonly
        data-bs-toggle="{{ $modal ?? '' }}" 
        data-bs-target="{{ $modalTarget ?? '' }}"
    >
    @error($field)
        <span class="text-danger float-end" style="font-size: 11px">{{ $message }}</span>
    @enderror
</div>