<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Pulley</title>

    <!-- Bootstrap -->
    <link href="css/bootystrap.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="assets/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload=''>
    <?php include 'assets/navbar.html';?>
    <div class='container' style="width: 760px; margin: 0 auto">
    <h1>Features</h1>
      
      
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="assets/screenshots/dashboard.png" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="assets/screenshots/database.png" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="assets/screenshots/loading.png" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="assets/screenshots/errorlog.png" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


    </div>
    <?php include 'assets/footer.html'?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootystrap.min.js"></script>
  </body>
</html>
