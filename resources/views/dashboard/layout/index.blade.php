<!doctype html>
<html lang="fa">

    @include('dashboard.layout.includes.head')

        <body>
            <div class="wrapper ">
                <div class="main-panel">

                    @include("dashboard.layout.includes.leftBar")
                    @include("dashboard.layout.includes.navBar")

                    @yield('content')

                    @include('dashboard.layout.includes.footer')

                </div>
            </div>
        </body>

    @include('dashboard.layout.includes.script')

</html>
