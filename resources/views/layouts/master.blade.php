<!DOCTYPE html>
<html lang="fra">
    <head>
        @yield('style') @include('layouts/partials/_entete')
    </head>

    <body>
        <!--Page Preloder-->
        <div id = "preloder">
            <div class = "loader"></div>
        </div>
        <!--Humberger Begin-->
        @include('layouts/partials/_menu')
        <!--Humberger End-->
        <!--Header Section Begin-->
        @include('layouts/partials/_navbar')
        <!--Header Section End-->
        <!--Hero Section Begin-->
        @include('layouts/partials/_sidebar')
        <!--Hero Section End-->
        @yield('contenu')
        <!--footer Section Begin-->
        @include('layouts/partials/_footer')
        <!--footer Section End-->
        <!--Js Plugins-->
        @include('layouts/partials/_script')
    </body>

</html>