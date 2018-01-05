  <!DOCTYPE html>
  <html>
  <head>
    <title>India Tourisum</title>
    <link rel="stylesheet" href="<?php echo BASEURL;?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo BASEURL;?>assets/css/carousel.css">

    <link rel="stylesheet" href="<?php echo BASEURL;?>assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo BASEURL;?>assets/css/navbar.css">




        <script  src="<?php echo BASEURL;?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script  src="<?php echo BASEURL;?>assets/js/bootstrap.js" type="text/javascript"></script>


    <script src="<?php echo BASEURL;?>assets/js/angular.js"></script>
  <script src="<?php echo BASEURL;?>assets/js/route.js"></script>
  <script src="<?php echo BASEURL;?>assets/js/jquery-3.1.1.min.js"></script>


<style>
      h3{
        color: white;
      }
        
        label{
          color: white;
        }

          * {
              box-sizing: border-box;
          }

          .columns {
              float: left;
              width: 33.3%;
              padding: 8px;
          }

          .price {
              list-style-type: none;
              border: 1px solid #eee;
              margin: 0;
              padding: 0;
              -webkit-transition: 0.3s;
              transition: 0.3s;
          }

          .price:hover {
              box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
          }

          .price .header {
              background-color: #111;
              color: white;
              font-size: 25px;
          }

          .price li {
              border-bottom: 1px solid #eee;
              padding: 20px;
              text-align: center;
          }

          .price .grey {
              background-color: #eee;
              font-size: 20px;
          }

          .button {
              background-color: #4CAF50;
              border: none;
              color: white;
              padding: 10px 25px;
              text-align: center;
              text-decoration: none;
              font-size: 18px;
          }

          @media only screen and (max-width: 600px) {
              .columns {
                  width: 100%;
              }
          }



</style>
  </head>
  <body>

<div class="container-fluid" ng-app="myapp">

      <!-- Static navbar -->
      <nav class="navbar-fluid navbar-inverse fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color: white;">Indian Tourisum</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">

              <li><a href="#/">

                 <i class="fa fa-home"></i> Home</a></li>

              <li><a href="#/about"><i class="fa fa-building"></i> About</a></li>
             
              <li><a href="<?php echo BASEURL;?>/index.php/welcome/contact"><i class="fa fa-phone"></i>  Contact Us</a></li>


              <li><a href="<?php echo BASEURL;?>/index.php/welcome/search"><i class="fa fa-search"></i>  Search</a></li>
            
            </ul>


            <ul class="nav navbar-nav navbar-right">

               <li><a href="<?php echo BASEURL;?>/index.php/welcome/postblog"><span class="fa fa-twitter fa-lg"></span> Post Blog</a>
               </li>

              <li><a href="<?php echo BASEURL;?>/index.php/welcome/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
               </li>
               <li><a href="<?php echo BASEURL ;?>/index.php/welcome/login">
                <span class="glyphicon glyphicon-log-in"></span> Login</a></li>

            </ul>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

          <div class="col-sm-12">
          <ng-view></ng-view>
        </div>




    
  
  

 