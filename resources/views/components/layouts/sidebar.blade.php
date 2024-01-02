<aside class="sidebar">
    @php
        $auth = Auth::guard('admin')->user();
    @endphp
    <div class="sidebar-header">
        <span class="brand">MANGROVE CENTER</span>
    </div>
    <div class="sidebar-user">
        <img src="{{ url('public') }}/{{ $auth->foto }}" alt="">
        <div class="user-container">
            <h2>{{ $auth->nama }}</h2>
            <p>{{ $auth->email }}</p>
        </div>
    </div>
    <ul class="sidebar-menu">
        <li class="header">LIST MENU</li>
        <x-list.list-sidebar-menu url="admin/dashboard" icon="dashboard" title="Dashboard" />
        <x-list.list-sidebar-menu url="admin/event" icon="event_note" title="Data Event" />
        <x-list.list-sidebar-menu url="admin/katalog" icon="exposure" title="Data Katalog" />
        <x-list.list-sidebar-menu url="admin/penanaman" icon="exposure" title="Data penanaman" />
      
    </ul>
</aside>