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
function navFunctionIV() {
  // var navLinks = document.getElementsByClassName("subnav-content");
  var navItems4 = document.getElementsByClassName("nav-item-4");
  console.log(navItems4);
  for(var i = 0; i < navItems4.length; i++)
  if (navItems4[i].style.display === "flex" && navItems4[i].style.flexDirection === "column") {
    navItems3[i].style.display = "none";
  } else {
    navItems4[i].style.display = "flex";
    navItems4[i].style.flexDirection = "column";
  }
}
</script>
<div class="mobile-container">
<!-- Top Navigation Menu -->
  <div class="topnav">

    <div id="myLinks">
      <ul class="nav flex-column" id="main-drop">
        <li>
          <a href="#javascript:void(0);" onclick="navFunctionI()">
            Market
            <i class="fa fa-caret-down"></i>
          </a>
            <ul class="nav flex-column">
              <li>
                <a href="/inventory/local-dairy" class="nav-item-1">Local Dairy</a>
              </li>
              <li>
                <a href="/inventory/meat" class="nav-item-1">Local Meat</a>
              </li>
              <li>
                <a href="/inventory/deli" class="nav-item-1">Deli</a>
              </li>
              <li>
                <a href="/inventory/vegatables" class="nav-item-1">Vegatables</a>
              </li>
              <li>
                <a href="/inventory/spreads" class="nav-item-1">Local Honey and Jams</a>
              </li>
              <li>
                <a href="/inventory/drinks" class="nav-item-1">Drinks</a>
              </li>
              <li>
                <a href="/inventory/breakfast" class="nav-item-1">Breakfast</a>
              </li>
            </ul>
        </li>
        <li>
          <a href="#javascript:void(0);" onclick="navFunctionII()">
            General Store
            <i class="fa fa-caret-down"></i>
          </a>
          <ul class="nav flex-column">
            <li>
              <a href="/inventory/blankets" class="nav-item-2">Crafted Blankets</a>
            </li>
            <li>
              <a href="/inventory/art" class="nav-item-2">Artwork</a>
            </li>
            <li>
              <a href="/inventory/gifts" class="nav-item-2">Gifts</a>
            </li>
            <li>
              <a href="/inventory/garden" class="nav-item-2">Garden Plants</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#javascript:void(0);" onclick="navFunctionIII()">
            Feed Store
            <i class="fa fa-caret-down"></i>
          </a>
          <ul "nav flex-column">
            <li>
              <a href="/inventory/chicken-feed" class="nav-item-3">Chicken Feed</a>
            </li>
            <li>
              <a href="/inventory/horse-feed" class="nav-item-3">Horse Feed</a>
            </li>
            <li>
              <a href="/inventory/goat-feed" class="nav-item-3">Goat Feed</a>
            </li>
            <li>
              <a href="/inventory/supply" class="nav-item-3">Supplies</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#javascript:void(0);" onclick="navFunctionIV()">
            About
            <i class="fa fa-caret-down"></i>
          </a>
          <ul "nav flex-column">
            <li>
              <a href="/contact" class="nav-item-4">Contact</a>
            </li>
            <li>
              <a href="#about-section" class="nav-item-4">About</a>
            </li>
            <li>
              <a href="/" class="nav-item-4">Home</a>
            </li>
          </ul>
        </li>
      </ul>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
</div>
