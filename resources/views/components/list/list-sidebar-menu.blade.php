<li class="menu-item">
    <a href="{{ url($url ?? '') }}" class="{{ request()->is($url.'*') ? 'active' : '' }}">
        <i class="material-icons">{{ $icon ?? '' }}</i>
        <span>{{ $title ?? '' }}</span>
    </a>
</li>