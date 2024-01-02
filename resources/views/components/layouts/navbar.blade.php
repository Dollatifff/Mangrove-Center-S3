<nav class="navbars">

    @php
        $auth = Auth::guard('admin')->user();
    @endphp
    <button class="btn-coolapse">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <ul class="right-navbars">
        <li class="user-list dropdown">
            <a href="#"  data-bs-toggle="dropdown">
                <img src="{{ url('public') }}/{{ $auth->foto }}" alt="">
                <span class="name">{{ $auth->nama }}</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('admin/profile') }}">Profile</a></li>
                <li class="divider"></li>
                <li><a class="dropdown-item" href="{{ url('admin/logout') }}" onclick="return confirm('Yakin ingin keluar dari system ini ?!');">Logout</a></li>
              </ul>
        </li>
    </ul>
</nav>