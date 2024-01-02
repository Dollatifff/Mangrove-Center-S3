<a href="{{ $url ?? '' }}" class="btn btn-{{ $class ?? '' }} float-end d-flex align-items-center">
    <i class="material-icons">{{ $icon ?? '' }}</i>
    @isset($title)
    <span>{{ $titles ?? '' }}</span>
    @endisset
</a>