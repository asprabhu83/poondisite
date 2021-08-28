<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #660066;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #660066;
  background-color: white;

}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #fff;
  color: #660066;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #660066;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
 <aside class="left-sidebar" data-sidebarbg="skin5" style="background-color: #660066;">

    <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">


<div class="sidenav">
<!--   <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a> -->
<br>
<hr style="background-color: white; height: 1px;">
<h3 style="color: white; text-align: center;font-family: Century Schoolbook;">CRITERION - I</h3>
  
  <hr style="background-color: white; height: 1px;">

  <button class="dropdown-btn">1.1 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">1.1.1</a>
    <a href="#">1.1.2</a>
    <a href="#">1.1.3</a>
  </div>
  
<hr style="background-color: white; height: 1px;">

    <button class="dropdown-btn">1.2 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">1.2.1</a>
    <a href="#">1.2.2</a>
    <a href="#">1.2.3</a>
  </div>


<hr style="background-color: white; height: 1px;">


      <button class="dropdown-btn">1.3 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">1.3.1</a>
    <a href="#">1.3.2</a>
    <a href="#">1.3.3</a>
  </div>


<hr style="background-color: white; height: 1px;">


      <button class="dropdown-btn">1.4 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">1.4.1</a>
    <a href="#">1.4.2</a>
    <a href="#">1.4.3</a>
  </div>


<hr style="background-color: white; height: 1px;">


</div>


</nav>
</div>
</aside>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 
