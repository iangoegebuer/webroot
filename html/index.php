<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Pulley</title>

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
    <script src='js/ajax.functions.js'></script>
    <script>
      function fetchCallback(data)
      {
        data = $.parseJSON(data);
        for(var key in data)
        {
          var info = data[key];
          key = '#' + key.replace(/\./g,'_') + '_status';
          var icon = $(key);
          if(info['status'] == 'clean')
          {
            icon.removeClass('glyphicon-remove');
            icon.addClass('glyphicon-ok');
            icon.css('color', '#8CC63F');
          }
          else
          {
            icon.removeClass('glyphicon-ok');
            icon.addClass('glyphicon-remove');
            icon.css('color', '#ED1F24');
          }
        }
        $("#pleaseWaitDialog").modal('hide');
      }
      function doPull(domain)
      {
        $("#pleaseWaitDialog").modal('show');
        AJAXPull(domain, function(){AJAXFetch(fetchCallback);});
      }
      function doRemove(domain) {
        disableAndReload(15000);
        AJAXRemove(domain, function(d){});
      }
      function addDomain() {
        disableAndReload(15000);
        AJAXInit($("#domain").val(),$("#giturl").val(),$("#branchname").val(),function(d){console.log});
        return false;
      }
      function disableAndReload(timeout) {
        setTimeout(function() {location.reload();}, timeout);
        $("#pleaseWaitDialog").modal('show');
        }
    </script>
  </head>
  <body onload='setInterval("AJAXFetch(fetchCallback);", 30000);'>
    <?php include 'assets/navbar.html';?>
    <div class='container' style="width: 760px; margin: 0 auto">
      <h1>Welcome to Pulley</h1>
<div class="panel panel-default">
        <div class="panel-body">
<p><strong>What is Pulley?</strong></p>

<p>Pushing code to a live server is a cumbersome process, especially when changes happen often. At a hackathon at UCLA, Ian wrote a script that allowed changes to be rapidly deployed on the live server. This weekend, we turned his simple script into a full-blown server version control panel, useful for any small-scale web project. Welcome to Pulley.</p>

<p><strong>How does it work?</strong></p>

<p>Pulley manages a collection of websites on your server, each linked to a source repository on GitHub. From the Pulley dashboard, the latest version of each site can go live in one click. Administrators can easily create separate "development" and "release" websites from two branches of the same source repository. Finally, Pulley provides easy access to the server error log, and version control for the MySQL database in each website.</p>

<p>Pulley significantly simplifies the web development pipeline by making it easy to test and release websites. Keep an eye out for the public distribution!</p>
    </div>
    </div>
    <?php include 'assets/footer.html'?>

    
    <!-- jQuery (necessary for Bootstrap JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootystrap.min.js"></script>
  

</body>
</html>
