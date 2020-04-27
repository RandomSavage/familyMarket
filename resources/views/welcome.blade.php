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
    </body>
</html>
