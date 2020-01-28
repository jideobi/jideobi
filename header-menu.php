<!DOCTYPE html>
<html lang="en">
<head>
  <title>Billion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
    <nav class="window-menu">
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/">HOME</a>
      <a class="dropdown-btn">PROPERTIES
          <i class="fa fa-caret-down"></i>
          </a>
  <div class="dropdown-container">
    <a href="#">Morgage House</a>
      <hr style="background:white">
    <a href="#">Empty Lands</a>
      <hr>
    <a href="#">House for sale in lekki</a>
      <hr>
      <a href="#">Land with Structures</a>
  </div>
  <a href="#">SERVICES</a>
  <a class="dropdown-btn">Services
          <i class="fa fa-caret-down"></i>
          </a>
  <div class="dropdown-container">
    <a href="#">Real Estate Contractor</a>
    <a href="#">For rental</a>
    <a href="#">Design and Construction</a>
      <a href="#">House and lands for sale</a>
  </div>
  <a href="#">NEWS</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
       <div style="text-align: center;">
            <img src="image/DUXG3019.jpg"  height="45px"; width="199px";>
    </div>
</div>
    
    <div id="window">
        <img src="image/DUXG3019.jpg" height="35px" width="20%"> 
  <a href="#home">Home</a>
        <div class="dropdown">
            <a class="dropbtn">Properties</a>
  <div class="dropdown-content">
    <a href="#">Morgage House</a>
    <a href="#">Empty Lands</a>
      <a href="#">House for sale in lekki</a>
    <a href="#">Land with Structures</a>
  </div>
</div>
  <a href="#news">News</a>
  <a href="#contact">About</a>
 <div class="dropdown">
     <a class="dropbtn">Services</a>
  <div class="dropdown-content">
    <a href="#">Real Estate Contractor</a>
    <a href="#">For rental</a>
    <a href="#">Design and Construction</a>
      <a href="#">House and lands for sale</a>
  </div>
</div>
        
        <aside class="socials">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="google"><i class="fa fa-google"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </aside>

        
</div>
         
</nav>
    

    
       
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "190px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
    
    window.onresize = function(){
            if(window.innerWidth > 1000) {
                document.getElementById('main').style.display = 'none';
                document.getElementById('window').style.display = 'block';
                document.getElementById('desktop-search').style.display = 'block';
                document.getElementById('footer-window').style.display = 'block';
                document.getElementById('footer-mobile').style.display = 'none';
                
               
            } else {
                document.getElementById('main').style.display = 'inline-flex';
                document.getElementById('window').style.display = 'none';
                document.getElementById('desktop-search').style.display = 'none';
                 document.getElementById('footer-window').style.display = 'none';
                document.getElementById('footer-mobile').style.display = 'block';
                
            }
    }
     window.onload = function(){
            if(window.innerWidth > 1000) {
                document.getElementById('main').style.display = 'none';
                document.getElementById('window').style.display = 'block';
                document.getElementById('desktop-search').style.display = 'block';
                 document.getElementById('footer-window').style.display = 'block';
                document.getElementById('footer-mobile').style.display = 'none';
                
               
            } else {
                document.getElementById('main').style.display = 'inline-flex';
                document.getElementById('window').style.display = 'none';
                document.getElementById('desktop-search').style.display = 'none';
                 document.getElementById('footer-window').style.display = 'none';
                document.getElementById('footer-mobile').style.display = 'block';
                
            }
    }
     
     
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
