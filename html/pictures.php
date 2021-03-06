<?php

if($_SESSION['admin'] != 1){
    echo "Authentication completed / you are logged in but you don't have admin rights";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Impression</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="css/modern-business.css" rel="stylesheet">

    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                   
                    <div class="navbar-header">
                    <a href="index.html"><img src="./img/imp-logo.jpg" alt="1"></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>
                   
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                          
                            <li>
                                <a href="shop.html">Market</a>
                            <li>
                                <a href="Login.html">Login / Sign up</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
               
            </nav>

    
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>