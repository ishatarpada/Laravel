{{-- Blade component code --}}
<div
    {{ $attributes->class(['alert-dismissible fade show' => $dismissible])->merge(['class' => 'alert alert-' . $validType, 'role' => 'alert']) }}>
    @if (isset($title))
        <h4 {{ $title->attributes->class(['alert-heading']) }}>{{ $title }}</h4>
        <hr>
    @endif

    @if ($slot->isEmpty())
        <p>This is default content if the slot is empty</p>
    @else
    @endif
    {{ $slot }}
    @if (isset($footer))
        <hr>
        <h4 class="alert-footer">{{ $footer }}</h4>
    @endif
    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
