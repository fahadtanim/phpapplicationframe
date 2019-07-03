<!DOCTYPE HTML>
<html>

<head>

    <title>Fonok's Photobox</title>
    <link href="./app/view/viewHTML/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" />

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
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#test1">Home Slider</a></li>
                <li class="tab col s3"><a href="#test2">Home About</a></li>
                <li class="tab col s3"><a href="#test3">Home Testimonial</a></li>
                <li class="tab col s3"><a href="#test4">Footer</a></li>
            </ul>
        </div>
        <div id="test1" class="col s12">
            <h6>Upload Images for Slider of home</h6>
            <form action="./api/upload" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </div>
        <div id="test2" class="col s12">Home About</div>
        <div id="test3" class="col s12">Home Testimonial</div>
        <div id="test4" class="col s12">footer</div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        /*
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });*/

        // Or with jQuery

        $(document).ready(function() {
            $('.sidenav').sidenav();
        });

        // Or with jQuery

        $(document).ready(function() {
            $('.tabs').tabs();
        });
    </script>

</body>

</html>


<?php
    
?>