<!DOCTYPE html>
<html lang="en">
<!-- "{{ str_replace('_', '-', app()->getLocale()) }}" -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Family Market</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      @include('includes.header')
      @include('includes.mobile-nav')
      <section id="app-layout">
        <div class="welcome-jumbo">
          <div class="greeting">
            <h1><span class="greet">Family Market</span><br><span class="sub-greet">General Store</span></h1>
          </div>
          <div class="jumbo-image">
            <img src="/img/fmSign.jpg">
          </div>
      </section>
      @include('includes.about')
      @include('includes.services')
      @include('includes.footer')
      <script>
      function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
      </script>
      <script type="text/javascript">
      function navFunction() {
        var navLinks = document.getElementsByClassName("subnav-content");
        console.log(navLinks);
        for(var i = 0; i < navLinks.length; i++)
        if (navLinks[i].style.display === "block") {
          navLinks[i].style.display = "none";
        } else {
          navLinks[i].style.display = "block";
        }
      }
      </script>

    </body>
</html>
