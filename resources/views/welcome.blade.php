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
      function navFunctionI() {
        // var navLinks = document.getElementsByClassName("subnav-content");
        var navItems = document.getElementsByClassName("nav-item-1");
        console.log(navItems);
        for(var i = 0; i < navItems.length; i++)
        if (navItems[i].style.display === "flex" && navItems[i].style.flexDirection === "column") {
          navItems[i].style.display = "none";
        } else {
          navItems[i].style.display = "flex";
          navItems[i].style.flexDirection = "column";
        }
      }
      function navFunctionII() {
        // var navLinks = document.getElementsByClassName("subnav-content");
        var navItems2 = document.getElementsByClassName("nav-item-2");
        console.log(navItems2);
        for(var i = 0; i < navItems2.length; i++)
        if (navItems2[i].style.display === "flex" && navItems2[i].style.flexDirection === "column") {
          navItems2[i].style.display = "none";
        } else {
          navItems2[i].style.display = "flex";
          navItems2[i].style.flexDirection = "column";
        }
      }
      function navFunctionIII() {
        // var navLinks = document.getElementsByClassName("subnav-content");
        var navItems3 = document.getElementsByClassName("nav-item-3");
        console.log(navItems3);
        for(var i = 0; i < navItems3.length; i++)
        if (navItems3[i].style.display === "flex" && navItems3[i].style.flexDirection === "column") {
          navItems3[i].style.display = "none";
        } else {
          navItems3[i].style.display = "flex";
          navItems3[i].style.flexDirection = "column";
        }
      }
      </script>

    </body>
</html>
