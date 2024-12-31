<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    @include('auth.style')
</head>

<body class=" font-inter skin-default">
    <div class="loginwrapper">
        <div class="lg-inner-column">
            @include('auth.background')
            @yield('contentAuth')
        </div>
    </div>
    @include('auth.script')
</body>

</html>
