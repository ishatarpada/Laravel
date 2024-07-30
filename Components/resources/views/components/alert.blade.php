{{-- <div {{ $attributes->merge(['class' => 'alert alert-' . $validType, 'role' => 'alert']) }} role="alert">
    {{ $message }}
</div>
 --}}

<div
    {{ $attributes->class(['alert-dismissible fade show' => $dismissible])->merge(['class' => 'alert alert-' . $validType, 'role' => $attributes->prepends('alert')]) }}>
    {{ $message }}
    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
