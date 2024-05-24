<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('main_site.layouts.meta')
    @include('main_site.layouts.style')

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    @include('main_site.layouts.modes')
    @include('main_site.layouts.loader')
    @include('main_site.layouts.side-bar')
     <!-- Main Content -->
     <main class="body-content">
        @include('main_site.layouts.header')
        @yield('content')
     </main>


    @include('main_site.layouts.script')

</body>

</html>
