
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>SMS Notifier - Sign up</title>

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

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="<?php echo base_url();?>sign_in">Sign in</a></li>
        </ul>
        <h3 class="text-muted">SMS Notifier</h3>
      </div>
      <h3 class=""></h3>
      <div class="alert alert-success">
        <a href="#" class="alert-link">Enter the following information</a>
      </div>
      <div id="infoMessage" align="center"><?php 
          if ($message == null){

          }
          else{
            echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
            echo '<div class="alert alert-danger">';
            echo $message;
            echo '</div>';
            }
          ?>
      </div>
      <form class="form-horizontal" id="validation-form" role="form" method="post" action="<?php echo base_url();?>sign_up">
        <div class="form-group">
          <label for="firstName" class="col-sm-3 control-label">First Name:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="firstName" name="firstName">
          </div>
        </div>
        <div class="form-group">
          <label for="lastName" class="col-sm-3 control-label">Last Name:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="lastName" name="lastName">
          </div>
        </div>
        <div class="form-group">
          <label for="middleName" class="col-sm-3 control-label">Middle Name:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="middleName" name="middleName">
          </div>
        </div>
        <div class="form-group">
          <label for="gender" class="col-sm-3 control-label">Gender:</label>
          <div class="col-sm-6">
            <div class="radio">
                <label>
                  <input type="radio" name="gender" id="gender1" value="Male">
                   Male
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="gender" id="gender2" value="Female">
                  Female
                </label>
              </div>
          </div>
        </div> 
        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email:</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label for="contactNo" class="col-sm-3 control-label">Contact No:</label>
          <div class="col-sm-6">
            <div class="input-group margin-bottom-sm">
              <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
              <input class="form-control" type="text" id="contactNo" name="contactNo">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Username:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="username" name="username">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-3 control-label">Password:</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="password" name="password">
          </div>
        </div>
        <div class="form-group">
          <label for="cpassword" class="col-sm-3 control-label">Confirm Password:</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="cpassword" name="cpassword">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <div class="checkbox">
              <!-- <label>
                <input type="checkbox" name="agree" id="agree"> 
                I accept the Terms and Condition
              </label> -->
              <label>
                <input type="checkbox" name="agree" id="agree"> 
                <span class="lbl">I accept the Terms and Condition</span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit </button>
            <button type="reset" class="btn btn-default">Reset</button>
          </div>
        </div>
      </form>

      <div class="footer">
        <p>&copy; Smart DevNet Interns 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>sms_resources/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
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
              email:true,
              remote: {
                url: "<?php echo base_url();?>sign_up/email_exists",
                type: "post",
                data: {
                  email: function(){ return $("#email").val(); }
                }
              }
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
                email: "Please provide a valid email.",
                remote: "This email is not available",
              },
              password: {
                required: "Please specify a password.",
                minlength: "Please specify a secure password."
              },
              username:{
                remote: "This username is not available."
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
      })
    </script>
  </body>
</html>
