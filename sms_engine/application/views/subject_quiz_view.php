
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
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url();?>sms_resources/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>sms_resources/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url();?>sms_resources/css/jquery-ui-1.10.3.full.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-default.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-os.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-plain.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-flat-attack.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-wireframe.css" rel="stylesheet" />
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
            <li class="active"><a href="<?php echo base_url();?>dashboard">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>profile"><i class="fa fa-user"></i> Profile</a></li>
                <!--  <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li> -->
                <li class="divider"></li>
                <li><a href="<?php echo base_url();?>sign_out"><i class="fa fa-sign-out"></i> Sign out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <!-- ` -->
    <div class="row">
        <div class="col-sm-3 col-md-2">
          <ul class="nav nav-pills nav-stacked">
            <li> 
              <form>
                <a href="#" id="add_sub_btn" class="btn btn-info btn-navbar">Add Subject</a>
              </form>
            </li>
            <!-- <li>
              <form>
                <a href="#" id="id-btn-dialog2" class="btn btn-info btn-navbar">Others</a>
              </form>
            </li> -->
          </ul>
        </div>
        <div class="col-xs-6 col-md-6">
          <div class="well">
              No recent quiz.
          </div>
          <div class="well">
              <!-- No recent subject. -->
              <div class="panel-group" id="accordion">
              <?php if(isset($records)) : foreach($records as $row) : ?>
               
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $row->subjectid;?>">
                        <?php echo $row->subject;?>
                        
                      </a> 
                      <span class="pull-right"><a class="delete_btn" style="cursor:pointer;" a="<?php echo $row->subjectid;?>"><i class="fa fa-times"></i></a></span>
                    </h4>    
                  </div> 
                  <div id="collapse_<?php echo $row->subjectid;?>" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table width="100%">
                        <col width="15%">
                        <col width="5%"> 
                        <col width="80%">
                        <legend>Details</legend> 
                        <tr>
                          <td>Professor</td>
                          <td>:</td>
                          <td><?php echo $row->profname;?></td>
                        </tr>

                        <tr>
                          <td>Day/s</td>
                          <td>:</td>
                          <td><?php echo $row->day?></td>
                        </tr>
                        <tr>
                          <td>Time</td>
                          <td>:</td>
                          <td><?php echo $row->time;?></td>
                        </tr>
                        <tr>
                          <td>Room</td>
                          <td>:</td>
                          <td><?php echo $row->room;?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><span class='col-sm-offset-9'></span></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                
              <?php endforeach;?>
              <?php endif;
                ?> 
              </div> 
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
      
        </div>
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
    <script src="<?php echo base_url();?>sms_resources/js/vex/vex.js"></script>
    <script src="<?php echo base_url();?>sms_resources/js/vex/vex.dialog.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         var theme = 'vex-theme-plain';
         $(".delete_btn").click(function() {
             var a =  $(this).attr('a'); 
             vex.dialog.confirm({
               message: 'Do you want to delete this subject?',
               className: theme ,
               buttons: [
                  $.extend({}, vex.dialog.buttons.YES, { text: 'Yes' }),
                  $.extend({}, vex.dialog.buttons.NO, { text: 'No' })
               ],
               callback: function(data) {
                  if(data == false){
                    console.log('Cancelled');

                  } 
                  else{
                     
                    console.log('Delete this subject. ID:'+ a);
                    $.ajax({  
                      url: "<?php echo base_url();?>subject/delete_subject",
                      type: "post",  
                      data: { 
                        id: a,
                      }, 
                      success: function(e) {
                        vex.dialog.alert({message : 'Deleted Successfully',className:'vex-theme-plain', callback: function (data) {location.reload(); }});                      
                      }
                    });
                  }
               } 

             });   
         });
        $("#add_sub_btn").click(function() {
          vex.dialog.open({
              message: $('#dialog').html(),
              input: '' +
                '' +  
                '<b>Subject Information</b>' +
                '<input name="user_id" type="hidden" value="<?php echo $this->session->userdata("user_id");?>"/>' +
                '<input name="subject_name" type="text" placeholder="Subject Name" required />' +
                '<input name="prof_name" type="text" placeholder="Professor Name" required />' +
                '<b>Schedule : </b>'+ 
                '<div class="form-group">Day / s :  <div class="btn-group" data-toggle="buttons">' +
                  '<label class="btn btn-primary">' +
                   '<input type="checkbox" name="subject_day" value="Monday"> Mon' +
                  '</label>' + 
                  '<label class="btn btn-primary">' +
                  ' <input type="checkbox" name="subject_day" value="Tuesday"> Tues' +
                  '</label>' +   
                  '<label class="btn btn-primary">' + 
                    '<input type="checkbox" name="subject_day" value="Wednesday"> Wed' + 
                  '</label>' +   
                  '<label class="btn btn-primary">' + 
                    '<input type="checkbox" name="subject_day" value="Thursday"> Thurs' + 
                  '</label>' + 
                   '<label class="btn btn-primary">' + 
                    '<input type="checkbox" name="subject_day" value="Friday"> Fri' + 
                  '</label>' +  
                '</div></div>' +
                '<input name="subject_time" type="text" placeholder="Time" required />' +
                '<input name="set_time" type="time" placeholder="Time" required />' +
                '<input name="subject_room" type="text" placeholder="Room" required />' +
                ''+
            '', 
              className:theme,
              callback: function(data) {
                if(data == false){
                  //vex.dialog.alert({message : 'Cancelled',className:'vex-theme-plain'});
                  console.log('Cancelled');
                }
                else{
                  console.log(data); 
                  var id   = data.user_id; 
                  var subj_name  = data.subject_name;
                  var prof  = data.prof_name;
                  var subj_day  = data.subject_day.toString();
                  var subj_time  = data.subject_time;
                  var subj_room  = data.subject_room;
                  //console.log(subj_day);
                    $.ajax({  
                      url: "<?php echo base_url();?>subject/add_subject",
                      type: "post",
                      data: {
                        id: id,
                        subj_name: subj_name,
                        prof : prof,
                        subj_day : subj_day,
                        subj_name : subj_name,
                        subj_time : subj_time,
                        subj_room : subj_room,
                      },   
                      success: function(e) {
                        console.log(e);
                        vex.dialog.alert({message : e,className:'vex-theme-plain', callback: function (data) {location.reload(); }});
                        
                      }
                    });
                }
         

              }
            
          });
        });
        
      });
    </script>
  </body>
  <div id="dialog" style="display:none">
     
  </div>
</html>
