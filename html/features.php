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
      <div class="panel panel-default">
        <div class="panel-body">
          <h3>Version control</h3>
          <p><b>Pulley</b> employs the power of git to store your websites! In a beautiful way, <b>Pulley</b> breaks you free of FTP and brings you a whole new way to manage work servers.</p>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <h3>Database backups made easy</h3>
          <p><b>Pulley</b> provides and easy to use one-click way to backup a MySQL database associated with each domain and subdomain hosted.</p>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <h3>Branching</h3>
          <p><b>Pulley</b> has the ability to not only use git repositories, but also the branches associated with them. This allows the creation of a development server in parallel with a release server. </p>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <h3>Apache Virtual Hosts</h3>
          <p><b>Pulley</b> not only clones the git repositories specified, but it also generates the Apache Virtual Hosts required to server the different domains and subdomains. There's no limit to what you can do. </p>
        </div>
      </div>


    </div>
    <?php include 'assets/footer.html'?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootystrap.min.js"></script>
  </body>
</html>
