<!DOCTYPE html>
<html>
<head>
    @include('Home.layouts.includes.head')

</head>


<body class="royal_preloader">
<div id="page" class="site">

    @include('Home.layouts.includes.Header')

    <div id="content" class="site-content">

        @yield('content')

    </div>


    @include('Home.layouts.includes.footer')
</div>




</div>

@include('Home.layouts.includes.foot')
</body>

</html>
