<!DOCTYPE HTML>
<html>

<head>

    <title>Fonok's Photobox</title>
    <link href="./app/view/viewHTML/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"> fonok's photobox</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">home</a></li>
                <li><a href="badges.html">photobox</a></li>
                <li><a href="badges.html">services</a></li>
                <li><a href="collapsible.html">pricing plan</a></li>
                <li><a href="mobile.html">about & contact</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">home</a></li>
        <li><a href="badges.html">photobox</a></li>
        <li><a href="badges.html">services</a></li>
        <li><a href="collapsible.html">pricing plan</a></li>
        <li><a href="mobile.html">about & contact</a></li>
    </ul>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>

</body>

</html>