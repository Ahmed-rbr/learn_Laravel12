@props(['name'])

@error($name)
    <p {{ $attributes->merge(['class' => 'text-red-500 text-sm mt-1']) }}>
        {{ $message }}
    </p>
@enderror
