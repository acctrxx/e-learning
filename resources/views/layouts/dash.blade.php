<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body style="background: #fcedf2;">
    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3 style="color: #d30c55;">@yield('main_title')</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p style="color: #d30c55;">2021 &copy; eInsight</p>
                    </div>
                    <div class="float-end">
                        <p style="color: #d30c55;">Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="#" style="color: #ff005e;">Duu</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @include('layouts.footer')
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>