<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    @include('front_layout.head_assets')
</head>

<body>
    <!--################ Start Header Area ########-->
    @include('front_layout.navbar')
    <!--######## End Header Area ########-->
    @yield('content')
    <!--######## start footer Area ########-->
    @include('front_layout.footer')
    <!--######## End footer Area ########-->
    @include('front_layout.footer_assets')
</body>

</html>