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
    <link href="<?php echo base_url();?>sms_resources/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>sms_resources/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url();?>sms_resources/css/jquery-ui-1.10.3.full.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-default.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-os.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-plain.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-flat-attack.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/vex/vex-theme-wireframe.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>sms_resources/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>sms_resources/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>sms_resources/css/font-awesome.min.css" />

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
            <li><a href="#" id="add_sub_btn">Add Subject</a></li>
            <li><a href="<?php echo base_url();?>about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>profile"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="<?php echo base_url();?>sign_out"><i class="fa fa-sign-out"></i> Sign out</a></li>
          </ul>
        </div>
      </div>
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
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" class="quiz_view" a="<?php echo $row->subjectid;?>" href="#collapse_<?php echo $row->subjectid;?>">
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
                        <legend>Details <a><i class="fa fa-edit pull-right" onclick="edit_subject('<?php echo $row->subjectid?>')"></i></a></legend> 
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
                          <td><?php //echo $row->time;
                              $date = $row->time; 
                              echo date('h:i A', strtotime($date));
                          ?></td>
                        </tr>
                        <tr>
                          <td>Dismissal</td>
                          <td>:</td>
                          <td><?php //echo $row->time;
                              $date = $row->endclass; 
                              echo date('h:i A', strtotime($date));
                          ?></td>
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
                      <div class="quiz_view_list"></div>
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
        <div style="display:none" id="quiz_info"></div>
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
         var theme = 'vex-theme-plain';
      $(document).ready(function() {
        
         $(".quiz_view").click(function() {
            var a =  $(this).attr('a'); 
            
            console.log(a);
            $.ajax({
              url: "<?php echo base_url();?>quiz/view_quiz",
              type: "post",  
              data: { 
                id: a,
              }, 
              dataType: 'json',
              success: function(e) {
                console.log(e);
                //vex.dialog.alert({message : 'Delete Successfully',className:'vex-theme-plain', callback: function (data) {location.reload(); }});                      
                $('.quiz_view_list').html(e);
              }
            });
            
        });
       
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
                '<div class="form-group">Day:  <div class="btn-group" data-toggle="buttons">' +
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
                '</div></div>' + 'From : '+ 
                '<input name="subject_time" type="time" placeholder="Time" required />' +
                'To : '+ 
                '<input name="subject_end" type="time" placeholder="Time" required />' +
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
                  var subj_end = data.subject_end;
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
                        subj_end : subj_end,
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
      function delete_quiz(a){
          //alert(a);
          vex.dialog.confirm({
             message: 'Do you want to delete this quiz?',
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
                  
                  console.log('Delete this quiz. ID:'+ a);
                  $.ajax({  
                    url: "<?php echo base_url();?>quiz/delete_quiz",
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
      }
      function edit_subject(a) {
        alert(a);
      }
      function quiz_desc(a){

          console.log(a);
          $.ajax({
            url: "<?php echo base_url();?>quiz/quiz_desc",
              type: "post",
              data: {
                id:a
              },   
              dataType:'json',
              success: function(e) {
                console.log(e);
                $('#quiz_info').html(e);
                vex.dialog.alert({
                  message: $('#quiz_info').html(),
                  className: theme,
                });
                
              }
          });
      }
      function add_quiz(a)
      {
         //alert(a);
         vex.dialog.open({
              message: $('#dialog').html(),
              input: '' +
                '' +  
                '<b>Task Information</b>' +
                '<input name="subj_id" type="hidden" value="'+a+'"/>' +
                '<input name="quiz_name" type="text" placeholder="Name" required />' +
                //'<input name="quiz_category" type="text" placeholder="Category" required />' +
                //'<input name="quiz_category" type="dropdown" required />' class="form-control date form_datetime" placeholder="YYYY-MM-DD HH:mm"
                '<select class="form-control" name="quiz_category" type="dropdown" required >'+
                '<option value="Exam" name="Exam">Exam</option>'+
                '<option value="Quiz" name="Quiz">Quiz</option>'+
                '<option value="Assignment" name="Assignment">Assignment</option>'+
                '<option value="Project" name="Project">Project</option>'+
                '<option value="Recitation" name ="Recitation">Recitation</option>'+
                '<option value="Duty" name="Duty">Duty</option>'+
                '<option value="Demonstration" name="Demonstration">Demonstration</option>'+
                '<option value="Defense" name="Defense">Defense</option>'+
                '<option value="Other" name="Others">Other</option>'+
                '</select>' +
                '<br>' +
                '<b>Schedule asdf: </b>'+ 
                '<input name="sched" type="datetime" class="form-control date form_datetime" placeholder="YYYY-MM-DD HH:mm" required />' +
                '<b>Message: </b>'+ 
                '<textarea class="form-control" name="msg" rows="5"></textarea> ' +
                
                //'From : <input name="quiz_time1" type="time" placeholder="Time" required />' +

               // 'to : <input name="quiz_time2" type="time" placeholder="Time" required />' +
                //'<input name="quiz_room" type="text" placeholder="Room" required />' +
                //'alert : <input name="set_time" type="time" placeholder="Time" required />' +
                //'<input name="set_date" type="date" placeholder="Date" required />' +
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
                  var subj_id   = data.subj_id; 
                  var quiz_name  = data.quiz_name;
                  var quiz_category  = data.quiz_category;
                  var sched = data.sched;
                  
                  //var token = data.token;
                  var msg = data.msg;
                  //var quiz_date  = data.quiz_date;
                  //var quiz_time_from  = data.quiz_time1;
                 // var quiz_time_to  = data.quiz_time2;
                  //var quiz_room  = data.quiz_room;
                  //var set_time = data.set_time;
                  //var set_date = data.set_date;
                  //console.log(subj_day);
                    $.ajax({  
                      url: "<?php echo base_url();?>quiz/add_quiz",
                      type: "post",
                      data: {
                        subj_id: subj_id,
                        quiz_name: quiz_name,
                        quiz_category : quiz_category,
                        sched : sched,
                        msg : msg,
                        //token : token,
                        //quiz_time_from : quiz_time_from,
                        //quiz_time_to : quiz_time_to,
                        //quiz_room : quiz_room,
                        //set_time : set_time,
                        //set_date : set_date,
                      },   
                      success: function(e) {
                        console.log(e);
                        vex.dialog.alert({message : e,className:'vex-theme-plain', callback: function (data) {location.reload(); }});
                        
                      }
                    });
                }
         

              }
            
          });
      }

    </script>
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
