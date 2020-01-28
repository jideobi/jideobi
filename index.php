<?php
require_once ('header-menu.php');
?>
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
    <div class="main">
        
        <div class="index-bg">
            <div class="bg-text">
                <h1>Ralph-Billion Real Estate Experts</h1>
                <p>residential & commercial</p>
            </div>
            <div id="desktop-search">
            <div class="bg-link">
                <a class="sales-link" href="#">Sales</a><a class="rent-link" href="#">Rentals</a>
            </div>
            <fieldset>
                <form class="example" action="#" method="post">
                    <input type="text" id="searchBox" placeholder="search City, State or Area" value="" autocomplete="off">
                    <button type="submit" name="submit">search</button><br>
                    
                </form>
            </fieldset>
            </div>
        </div>

        <div class="welcome">
            <h1>WELCOME TO RALPH-BILLION VALUES</h1>
            <p style="text-align: center;">Where dreams are made reality...</p>
        </div>
    
        
        <div class="offers" style="padding: 59px; margin-left: 10px;">
            
            <div style="display: inline-flex; padding-left:30px">
            <img src="image/icon-estate-3-3-1-1-78x80.png" height="90px">
            <div style="padding-left:8px;">
                <h4>seller</h4>
                <p>whether it's area attractions,<br>
                    affordable plots of land, new<br>
                    layouts, best locations in<br>
                    South/East, Lagos and Abuja<br>
                    here's a great place to start.</p>
            </div>
        </div>
          <div style="display: inline-flex; padding-left:30px">
            <img src="image/estate_img_2-3-1-1-78x80.png" height="90px">
            <div style="padding-left:8px;">
                <h4>For Rentals</h4>
                <p>Our professional are here to help<br>
                    you with finding your dream<br>
                    home, coordinating a moving<br>
                    company and making you feel<br>
                    comfortable and safe.</p>
            </div>
        </div>
          <div style="display: inline-flex; padding-left:30px">
            <img src="image/Icon-estate-1-3-1-1-78x80.png" height="95px">
            <div style="padding-left:8px;">
                <h4>For Developers</h4>
                <p>Browse properties for sale<br>
                                subscribe with us and get alerted<br>
                                when specific properties that<br>
                                interests you are loaded and more.</p>
            </div>
        </div>
        
        </div>
        
    <?php
        require_once ('footer.php');
        ?>
            
        </div>
    </body>
</html>