@props([
    "name",
    "label" => false,
    "type" => "text",
])

<div class="space-y-2">
    @if ($label)
        <label for="{{ $name }}" class="label" > {{ $label }} </label>
    @endif

    @if ($type === "textarea")
        <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            class="textarea"
            {{ $attributes }}
        ></textarea>
    @else
        <input
            type="{{ $type }}"
            value="{{ old($name) }}"
            class="input"
            id="{{ $name }}"
            name="{{ $name }}"
            {{ $attributes }}
        />
    @endif

    <x-form.error name="{{ $name }}"/>

</div>
