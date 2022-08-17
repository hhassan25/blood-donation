<!DOCTYPE html>
<html>
<!--.fc-sat, .fc-sun {
    background-color: red !important;
}-->
<head>
<style>

.fc-sun {
    background-color: red !important;
}
</style>




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>-->
  <link href='full_calendar/core/main.css' rel='stylesheet'/>
  <link href='full_calendar/daygrid/main.css' rel='stylesheet'/>
  <!-- <link href='full_calendar/timgrid/main.css' rel='stylesheet' /> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <script src='full_calendar/core/main.js'></script>
  <script src='full_calendar/daygrid/main.js'></script>
  <script src='full_calendar/interaction/main.js'></script>
  <!-- <script src='full_calendar/timegrid/main.js'></script> -->
  
</head>

<body>
 <div class="container">
        <div class="row">
                <div id="calendar" class="col-centered">
                </div>
            </div>
		 </div>	
      
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
			  	<h4 class="modal-title" id="myModalLabel">Add Event</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			
			  </div>

    <div class="modal-body">
  	  <div class="form-group">
			<label for="title" class="col-sm-12 control-label">Event Type</label>
				<div class="col-sm-12">
				  <select name="title" class="form-control" id="title">
						  <option value="">Choose</option>
						  <option value="Profit Day">Profit Day</option>
						  <option value="Teacher Day">Teacher Day</option>
						  <option value="Christmas Day">Christmas Day</option>
						  <option value="New Year">New Year</option>
						  <option value="Eid Adha">Eid Adha</option>
						  <option value="Midterm Exam">Midterm Exam</option>
						  <option value="Final Exam">Final Exam</option> 
						  <option value="Monthly Exam">Monthly Exam</option> 			  
						</select>
		</div>	
			</div>
			  
				  
				  <div class="form-group">
					<label for="color" class="col-sm-12 control-label">Color</label>
					<div class="col-sm-12">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5"> Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0"> Turquoise</option>
						  <option style="color:#008000;" value="#008000"> Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700"> Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00"> Orange</option>
						  <option style="color:#FF0000;" value="#FF0000"> Red</option>
						  <option style="color:#000;" value="#000">Black</option>
						  
						</select>
					</div>
				  </div>

		<div class="form-group">
					<label for="start" class="col-sm-12 control-label">Start date</label>
					<div class="col-sm-12">
					<input type="text" name="start" class="form-control" id="start" >
			</div>
		  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-12 control-label">End date</label>
					<div class="col-sm-12">
					  <input type="text" name="end" class="form-control" id="end" >
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
			  <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				
			  </div>
			  
			  <div class="modal-body">
		  <div class="form-group">
					<label for="title" class="col-sm-12 control-label">Event Type</label>
					<div class="col-sm-12">
					  <select name="title" class="form-control" id="title">
						  <option value="">Choose</option>
						  <option  value="Profit Day">Profit Day</option>
						  <option  value="Teacher Day">Teacher Day</option>
						  <option  value="Eid Bshara">Eid Bshara</option>
						  <option  value="Ramadan">Ramadan</option>
						  <option  value="Christmas Day">Christmas Day</option>
						  <option value="New Year">New Year</option>
						  <option value="Eid Adha">Eid Adha</option>
						  <option value="Midterm Exam">Midterm Exam</option>
						  <option value="Final Exam">Final Exam</option> 
						  <option value="Monthly Exam">Monthly Exam</option> 			  
						</select>
					</div>
					</div>
					
				  <div class="form-group">
					<label for="color" class="col-sm-12 control-label">Color</label>
					<div class="col-sm-12">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0"> Turquoise</option>
						  <option style="color:#008000;" value="#008000">Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700"> Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00"> Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">Red</option>
						  <option style="color:#000;" value="#000"> Black</option>
						  
						</select>
					</div>
				  </div>
				  
				   <div class="form-group">
					<label for="start" class="col-sm-12 control-label">Start date</label>
					<div class="col-sm-12">
					  <input type="text" name="start" class="form-control" id="start" >
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-12 control-label">End date</label>
					<div class="col-sm-12">
					  <input type="text" name="end" class="form-control" id="end" >
					</div>
				  </div>
				  
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
   




  <script>

    document.addEventListener('DOMContentLoaded', function () {
      const calendarEl = document.getElementById('calendar');
      const calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid', 'interaction'],
        // plugins: ['dayGrid', 'interaction','timeGrid','list'],
        defaultView: 'dayGridMonth',
        editable: true,
        selectable: true,
        eventLimit:true,
		allDay:true,
		allDayDefault:true,
		hiddenDays: [0] ,
        header: { 
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,dayGridWeek,dayGridDay'
          // right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: 'select.php',
		
        	   validRange: function () {
      return {
        start: ('2019-11-10'),
        end: ('2020-06-05')
      };
    },
        select: function (selectionInfo) {
		$('#ModalAdd #start').val(formatDate(selectionInfo.start));
		$('#ModalAdd #end').val(formatDate(selectionInfo.end));
		$('#ModalAdd').modal('show');       
        },
		
		
		
				eventClick: function (eventClickInfo ) {
					$('#ModalEdit #id').val(eventClickInfo.event.id);
					$('#ModalEdit #title').val(eventClickInfo.event.title);
					//$('#ModalEdit #color').val(event.color);
					$('#ModalEdit #start').val(formatDate(eventClickInfo.event.start));
					$('#ModalEdit #end').val(formatDate(eventClickInfo.event.end));
					$('#ModalEdit').modal('show');
				},
	
        eventResize: function (info) {
			  var start =formatDate(info.event.start);
			  var end =formatDate(info.event.end);
			  var title = info.event.title;
			  var id = info.event.id;
			  $.ajax({
				url: "php/update.php",
				type: "POST",
				data: { title: title, start: start, end: end, id: id },
				success: function (data) {
				//alert('Event resized');
				}
			  })
			},
           eventDrop: function (eventDropInfo ) {
			  var start =formatDate(eventDropInfo.event.start);
			  var end =formatDate(eventDropInfo.event.end);
			  var title = eventDropInfo.event.title;
			  var id = eventDropInfo.event.id;
				  $.ajax({
					url: "php/update.php",
					type: "POST",
					data: { title: title, start: start, end: end, id: id },
					success: function (data) {
					  // calendar.fullCalendar('refetchEvents');
					  //alert("Event Updated");
					}
				  });
				},
		  eventDragStop: function(info){

          console.log(info);

        }

      });
	  

      calendar.render();
      
    });

    function formatDate(date){
      let day;
      let month;
      if(date.getDate() <= 9){
        day = 0 + "" + date.getDate();
      }else{
        day = date.getDate();
      }

      if(date.getMonth() + 1 <= 9){
        month = 0 + "" + (date.getMonth() + 1);
      }else{
        month = date.getMonth() + 1;
      }

      return date.getFullYear() + "-" + month + "-" + day;

    }



  </script>
  		
</body>

</html>