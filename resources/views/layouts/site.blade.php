<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="sumit kumar">
    <title>blog</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/styles/androidstudio.css') }}">
    <script src="{{ asset('assets/highlight.pack.js') }}"></script>

    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
</head>

<body>

@yield('header')

<section id="blog-section" >
    <div class="container">
        <div class="row">
            @yield('content')
            @yield('sidebar')
        </div>
    </div>

</section>




<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script>
    $(document).ready(function() {
        hljs.initHighlightingOnLoad();
    });
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }
</script>
</body>
</html>
