<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SMS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?php echo base_url();?>sms_resources/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>sms_resources/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>sms_resources/css/jumbotron-narrow.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>sms_resources/css/font-awesome-ie7.min.css" />
		<![endif]-->
		
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>sms_resources/css/ace-ie.min.css" />
		<![endif]-->
	</head>

	<body>
		
		<div class="container">
	     <!--  <div class="header">
	        <ul class="nav nav-pills pull-right">
	          <li class="active"><a href="#">Home</a></li>
	          <li><a href="#">About</a></li>
	          <li><a href="#">Contact</a></li>
	        </ul>
	        <h3 class="text-muted">SMS Notifier</h3>
	      </div> -->

	      <div class="jumbotron">
	        <div class="error-container">
				<div class="">
					<h1 class="grey lighter smaller">
						<span class="red bigger-125">
							<i class="fa fa-bug"></i>
							Oh!
						</span>
						<?php echo $heading; ?>.
					</h1>
					<hr>
					<h4>
						There is something wrong <i class="fa fa-wrench fa-animated"></i> with the system. 
					</h4>
					<hr>
					<h5>Details:</h5>
	                <div class="well">
	                   <?php echo $message; ?>
	                </div>
	                <div class="space"></div>
	                <a class="btn btn-primary">
	                   <i class="fa fa-phone"></i>
	                   Contact Us, We'll fix it for you
	                </a>
				</div>
			</div>
	      </div>

	     
	      <div class="footer">
	        <p>&copy; Smart DevNet Interns 2014</p>
	      </div>

	    </div> <!-- /container -->

		 <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://code.jquery.com/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo base_url();?>sms_resources/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function goBack(){
			  window.history.back()
			}
		</script>
	</body>
</html>
