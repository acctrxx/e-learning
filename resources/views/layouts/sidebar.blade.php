@php
    $current_path = '/' . request()->path();

    $dashboard = [
        'title' => 'Dashboard',
        'url' => '/dashboard'
    ]; 
    $class = [
        'title' => 'My Class',
        'url' => '#',
        'icon' => 'bi bi-person-fill',
        'childrens' => [
            [
            'title' => 'List Class',
            'url' => '/classes/all'
            ],
            [
                'title' => 'Create Class',
                'url' => '/classes/create'
            ]
        ]
    ];
    $user = [
        'title' => 'User',
        'url' => '#',
        'icon' => 'bi bi-file-text-fill',
        'childrens' => [
            [
            'title' => 'List User',
            'url' => '/users/all'
            ],
            [
                'title' => 'Create User',
                'url' => '/users/create'
            ]
        ]
    ];
    $category = [
        'title' => 'Category',
        'url' => '#',
        'icon' => 'bi bi-tags-fill',
        'childrens' => [
            [
            'title' => 'List Category',
            'url' => '/categories/all'
            ],
            [
                'title' => 'Create Category',
                'url' => '/categories/create'
            ]
        ]
    ];
    $setting = [
        'title' => 'Setting',
        'url' => '#',
        'icon' => 'bi bi-gear-fill'
    ];

    $menus = [$dashboard, $class, $category, $user, $setting];
@endphp

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
                @foreach ($menus as $menu)
                    @if (isset($menu['childrens']))
                        @php
                            $isActive = false;
                            foreach ($menu['childrens'] as $child) {
                                if($child['url'] == $current_path){
                                    $isActive = true;
                                }
                            }
                        @endphp
                        <li class="sidebar-item has-sub {{ $isActive ? 'active' : ''}}">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                            <ul class="submenu {{ $isActive ? 'active' : '' }}">
                                @foreach ($menu['childrens'] as $item)
                                <li class="submenu-item ">
                                    <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="sidebar-item {{$current_path == $menu['url'] ? 'active' : ''}} ">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
                {{-- <li class="sidebar-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class='sidebar-link btn btn-danger text-dark'>
                        <i class="bi bi-box-arrow-left text-dark"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li> --}}
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>