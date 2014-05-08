
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>SMS Notifier</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>sms_resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>sms_resources/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>sms_resources/css/font-awesome.min.css" />
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="countdown()">

    <div class="container">
        <div class="pager">
           <h4>Account has successfully created</h4>
          <h4>Redirecting to <a href="<?php echo base_url();?>sign_in">Login</a> in <span id="countdown">5</span> secs ...</h4>
          <i class="fa fa-spinner fa-spin fa-3x"></i>
        </div>
         
          
      <div class="footer">
        <p>&copy; Smart DevNet Interns 2014</p>
      </div>

    </div>
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>sms_resources/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>sms_resources/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      var ss = 5;
      function countdown() {
        ss = ss-1;
        if (ss<0) {
        window.location="<?php echo base_url();?>sign_in";
        }
        else {
        document.getElementById("countdown").innerHTML=ss;
        window.setTimeout("countdown()", 1000);
        }
      }
    </script>
  </body>
</html>
