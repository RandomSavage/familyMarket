
  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
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
