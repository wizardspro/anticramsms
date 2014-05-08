
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

    <link href="<?php echo base_url();?>sms_resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>sms_resources/css/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>sms_resources/css/font-awesome.min.css" />
    
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li class="active"><a href="<?php echo base_url();?>about">About</a></li>
          <li><a href="<?php echo base_url();?>sign_in">Sign in</a></li>
        </ul>
        <h3 class="text-muted">SMS Notifier</h3>
      </div>


    <div class="container theme-showcase" role="main">

    <div class="row">

        <div class="col-xs-6 col-md-6">
         <!--  <div class="well">
              No recent quiz.
          </div> -->
          
              <!-- No recent subject. -->
              <div class="panel-group" id="accordion">
              <?php if(isset($records)) : foreach($records as $row) : ?>
               
                <div class="panel panel-default">
                
                  <div id="collapse_<?php echo $row->subjectid;?>" class="panel-collapse collapse">
                    <div class="panel-body">
                      
  
                    </div>
                  </div>
                </div>
                
              <?php endforeach;?>
              <?php endif;
                ?>
              </div>
          </div>
        
       <!--  <div class="col-xs-12 col-md-4">
            <div class="well">
               <!-- <div id="quiz_view"></div>
            </div>
        </div> -->
<center><img src="<?php echo base_url();?>sms_resources/img/smartdev.png"></center>
      </div>

<br>
<h3>Contributors</h3><br>
<h4>SMART DevNet Interns under the supervision of Ms. Marica Uchida</h4><br>
<center><img src="<?php echo base_url();?>sms_resources/img/diopot.jpg"><br><br>
<img src="<?php echo base_url();?>sms_resources/img/piotot.jpg"><br><br>
<img src="<?php echo base_url();?>sms_resources/img/gelatot.jpg"><br><br>
<img src="<?php echo base_url();?>sms_resources/img/kentot.jpg"><br><br>
<img src="<?php echo base_url();?>sms_resources/img/jampot.jpg"></center>

<br>
<br>
<br>
<br>
<br>
    <div class="footer">
        <p>&copy; Smart DevNet Interns 2014</p>
    </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>sms_resources/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>sms_resources/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>sms_resources/js/vex/vex.js"></script>
    <script src="<?php echo base_url();?>sms_resources/js/vex/vex.dialog.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>sms_resources/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 0,
            minuteStep: 1
        });
    </script>
    <div id="dialog" style="display:none">
     
  </div>
  </body>
  
</html>
