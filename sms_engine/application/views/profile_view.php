
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>SMS Notifier - Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>sms_resources/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url();?>sms_resources/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>sms_resources/css/theme.css" rel="stylesheet">
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

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>dashboard">SMS Notifier</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="<?php echo base_url();?>dashboard">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>profile"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="<?php echo base_url();?>sign_out"><i class="fa fa-sign-out"></i> Sign out</a></li>

            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>profile"><i class="fa fa-user"></i> Profile</a></li>
                 <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url();?>sign_out"><i class="fa fa-sign-out"></i> Sign out</a></li>
              </ul>
            </li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
     <!--  <div class="jumbotron">
        <h1>Hello, world!</h1>
        <h4>Welcome, <?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name');?>!</h4>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div> -->

      <div class="row">
        <div class="col-sm-3 col-md-2">
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="<?php echo base_url();?>profile"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="<?php echo base_url();?>profile/edit_profile"><i class="fa fa-edit"></i> Edit Profile</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-md-6">
        <?php if(isset($records)) : foreach($records as $row) : ?>
          <div class="well">
              P{rofile}
              <table width="100%">
                <col width="30%">
                <col width="70%">
                <tr>
                  <td>Name : </td>
                  <td><?php echo $row->first_name.' '.$row->last_name;?> </td>
                </tr>
                <tr>
                  <td>Email : </td>
                  <td><?php echo $row->email;?></td>
                </tr>
                <tr>
                  <td>Username : </td>
                  <td><?php echo $row->username;?></td>
                </tr>
                <tr>
                  <td>Contact No : </td>
                  <td><?php echo $row->contact_no;?></td>
                </tr>
                <tr>
                  <td>Gender : </td>
                  <td><?php echo $row->gender;?></td>
                </tr>
                <tr>
                  <td>Date Created : </td>
                  <td><?php echo $row->date_created;?></td>
                </tr>
              </table>
          </div>
        <?php endforeach;?>
        <?php endif; ?>
        </div>
        <div class="col-xs-12 col-md-4"></div>
      </div>



    <div class="footer">
        <p>&copy; Smart DevNet Interns 2014</p>
    </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>sms_resources/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>sms_resources/js/bootstrap.min.js"></script>
  
  </body>
</html>
