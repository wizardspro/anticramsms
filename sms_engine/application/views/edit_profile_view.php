
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

           <!--  <li class="dropdown">
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
            <li><a href="<?php echo base_url();?>profile"><i class="fa fa-user"></i> Profile</a></li>
            <li class="active"><a href="<?php echo base_url();?>profile/edit_profile"><i class="fa fa-edit"></i> Edit Profile</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-md-6">
        <?php if(isset($records)) : foreach($records as $row) : ?>
          <div class="well">
              <div id="infoMessage" align="center"><?php 
                  if ($message == null){

                  }
                  else{
                    /*echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    echo '<div class="alert alert-danger">';
                    echo $message;
                    echo '</div>';*/
                    echo $message;
                    }
                  ?>
              </div>
              P{rofile}
              <form class="form-horizontal" id="validation-form" role="form" method="post" action="<?php echo base_url();?>profile/edit_profile">
                <div class="form-group">
                  <label for="firstName" class="col-sm-3 control-label">First Name:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $row->first_name;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lastName" class="col-sm-3 control-label">Last Name:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $row->last_name?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="middleName" class="col-sm-3 control-label">Middle Name:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="middleName" name="middleName" value="<?php echo $row->middle_name;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gender" class="col-sm-3 control-label">Gender:</label>
                  <div class="col-sm-6">
                    <div class="radio">
                        <label>
                          <input type="radio" name="gender" id="gender1" value="Male"
                          <?php $g = $row->gender; if($g == "Male"){ echo "checked";}else{}?>
                          >
                           Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gender" id="gender2" value="Female"
                          <?php $g = $row->gender; if($g == "Female"){ echo "checked";}else{}?>
                          >
                          Female
                        </label>
                      </div>
                  </div>
                </div> 
                <!-- <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email:</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="contactNo" class="col-sm-3 control-label">Contact No:</label>
                  <div class="col-sm-6">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                      <input class="form-control" type="text" id="contactNo" name="contactNo" value="<?php echo $row->contact_no;?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-10">
                    <button type="submit" class="btn btn-primary">Save </button>
                    <!-- <button type="reset" class="btn btn-default">Reset</button> -->
                  </div>
                </div>
              </form>
              <?php endforeach;?>
              <?php endif; ?>
              
              C{hange} P{assword}
              <form class="form-horizontal" id="change-pass-form" role="form" method="post" action="<?php echo base_url();?>profile/change_pass">
                <div class="form-group">
                  <label for="password" class="col-sm-3 control-label">Current :</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="newpassword" class="col-sm-3 control-label">New:</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="newpassword" name="newpassword">
                  </div>
                </div>
                <div class="form-group">
                  <label for="cnewpassword" class="col-sm-3 control-label">Retype new:</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="cnewpassword" name="cnewpassword">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </div>
                </div>
                
              </form>
          </div>
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
    <script src="<?php echo base_url();?>sms_resources/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>sms_resources/js/additional-methods.min.js"></script>
    <script src="<?php echo base_url();?>sms_resources/js/jquery.maskedinput.min.js"></script>

    <script type="text/javascript">
      jQuery(function($) {
        
          $('#contactNo').mask('(999) 999-9999');
          jQuery.validator.addMethod("phone", function (value, element) {
              return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
            }, "Enter a valid phone number.");
          
          jQuery.validator.addMethod("nameValidation", function(value, element) {
            return this.optional(element) || /^[a-z\-.,\s]+$/i.test(value);
          }, "Invalid Name Format.");

          jQuery.validator.setDefaults({
            debug: true,
            //success: "valid"
          });
          $('#validation-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
              firstName: {
                required: true,
                nameValidation: true,
              },
              lastName: {
                required: true,
                nameValidation: true,
              },
              middleName: {
                nameValidation: true,
              },
              email: {
                required: true,
                email:true
              },

              contactNo: {
                required: true,
                phone: 'required'
              },

              gender: 'required',
              username: {
                required: true,
                minlength:6,
                maxlength:20,
                alphanumeric:true,
                remote: {
                  url: "<?php echo base_url();?>sign_up/username_exists",
                  type: "post",
                  data: {
                    username: function(){ return $("#username").val(); }
                  }
                }
              },
              password: {
                required: true,
                minlength: 5
              },
              cpassword: {
                required: true,
                minlength: 5,
                equalTo: "#password"
              },
            
              agree: 'required'
            },
        
            messages: {
              email: {
                required: "Please provide a valid email.",
                email: "Please provide a valid email."
              },
              password: {
                required: "Please specify a password.",
                minlength: "Please specify a secure password."
              },
              username:{
                remote: "This bitch is not available."
              },
              gender: "Please choose gender",
              agree: "Please accept our policy"
            },
        
            invalidHandler: function (event, validator) { //display error alert on form submit   
              $('.alert-danger', $('.login-form')).show();
            },
        
            highlight: function (e) {
              $(e).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
        
            success: function (e) {
              $(e).closest('.form-group').addClass('has-success');
              $(e).closest('.form-group').removeClass('has-error').addClass('has-success');
              $(e).remove();
            },
        
            errorPlacement: function (error, element) {
              if(element.is(':checkbox') || element.is(':radio')) {
                var controls = element.closest('div[class*="col-"]');
                if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
              }
              else if(element.is('.select2')) {
                error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
              }
              else if(element.is('.chosen-select')) {
                error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
              }
              else error.insertAfter(element.parent());
            },
        
            submitHandler: function (form) {
                form.submit();
            },
            invalidHandler: function (form) {
            }
          });
          $('#change-pass-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
              password: {
                required: true
              },
              newpassword: {
                required: true,
                minlength: 5
              },
              cnewpassword: {
                required: true,
                minlength: 5,
                equalTo: "#newpassword"
              },

            },
        
            messages: {
              password: {
                //required: "Please specify a password.",
              },
            },
        
            invalidHandler: function (event, validator) { //display error alert on form submit   
              $('.alert-danger', $('.login-form')).show();
            },
        
            highlight: function (e) {
              $(e).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
        
            success: function (e) {
              $(e).closest('.form-group').addClass('has-success');
              $(e).closest('.form-group').removeClass('has-error').addClass('has-success');
              $(e).remove();
            },
        
            errorPlacement: function (error, element) {
              if(element.is(':checkbox') || element.is(':radio')) {
                var controls = element.closest('div[class*="col-"]');
                if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
              }
              else if(element.is('.select2')) {
                error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
              }
              else if(element.is('.chosen-select')) {
                error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
              }
              else error.insertAfter(element.parent());
            },
        
            submitHandler: function (form) {
                form.submit();
            },
            invalidHandler: function (form) {
            }
          });
      })</script>
      </body>
</html>
