{{-- <div {{ $attributes->merge(['class' => 'p-4 bg-white border rounded-md shadow-sm border-slate-300']) }} > --}}
<div {{ $attributes->class(['p-4 bg-white border rounded-md shadow-sm border-slate-300']) }} >
    {{ $slot }}
</div>