@props(['name', 'label', 'type' => 'text'])

<div class="space-y-2">
    <label for="{{ $name }}" class="label">{{ $label }}</label>
    <input type="{{ $type }}" value="{{ old($name) }}" class="input" id="{{ $name }}"
        name="{{ $name }}" {{ $attributes }} />

    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>
