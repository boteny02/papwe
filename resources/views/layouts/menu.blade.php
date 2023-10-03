
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="nav-item">
    <a href="{{ route('colleges.index') }}"
       class="nav-link {{ Request::is('colleges*') ? 'active' : '' }}">
        <p>Colleges</p>
    </a>
</li>


