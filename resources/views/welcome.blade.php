<!DOCTYPE html>
<html lang="en">
<!-- "{{ str_replace('_', '-', app()->getLocale()) }}" -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Family Market</title>
        <link rel="stylesheet" href="/css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <header>
        <div class="header-container">
          <div class="logo">
            <ul>
              <li><span class="logo-text"> Family Market</span><br><span class="logo-subtext">General Store</span></li>
            </ul>
          </div>
          <div class="header-menu">
            <ul>
              <li>
                <a href="#">Market</a>
                <div class="dropdown-content">
                  <a href="#">Vegetables</a>
                  <a href="#">Local Honey and Jams</a>
                  <a href="/inventory/local-dairy">Local Dairy</a>
                  <a href="/inventory/meat">Local Meat</a>
                  <a href="#">Drinks</a>
                  <a href="#">Breakfast</a>
                </div>
              </li>
              <li>
                <a href="#">General Store</a>
                <div class="dropdown-content">
                  <a href="#">Crafted Blankets</a>
                  <a href="#">Artwork</a>
                  <a href="#">Woven Textiles</a>
                  <a href="#">Garden Plants</a>
                </div>
              </li>
              <li>
                <a href="#">Feed Store</a>
                <div class="dropdown-content">
                  <a href="#">Chicken Feed</a>
                  <a href="#">Horse Feed</a>
                  <a href="#">Goat Feed</a>
                  <a href="#">Salt Blocks</a>
                </div>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <section id="app-layout">
        <div class="welcome-jumbo">
          <div class="greeting">
            <h1><span class="greet">Family Market</span><br><span class="sub-greet">General Store</span></h1>
          </div>
          <div class="jumbo-image">
            <img src="/img/wood.jpg">
          </div>
    </section>
    </body>
</html>
