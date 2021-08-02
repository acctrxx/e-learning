<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="https://i.pinimg.com/originals/8b/80/22/8b8022a1bdadc616217f2116243af729.png" alt="Logo" style="width: 100px; height: 30px;"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                    <li class="sidebar-item">
                        <a href="{{ url('dashboard-user') }}" class='sidebar-link'  style="{{ (request()->is('dashboard-user')) ? 'background: #d30c55; color: #fff;' : '' }}">
                            <i class="bi bi-house-door-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ url('user/setting') }}" class='sidebar-link' style="{{ (request()->is('user/setting')) ? 'background: #d30c55; color: #fff;' : '' }}">
                            <i class="bi bi-gear-fill"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                   
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class='sidebar-link btn' style="color: #d30c55;">
                        <i class="bi bi-door-open-fill" style="color: #E9C2D1;"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>