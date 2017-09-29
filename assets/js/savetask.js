// create new task

$('#savetask').click(function(){

	var formData = {
		'name'   : $('#name').val(),
		'description' : $('#description').val()
	};

	$.ajax({
      type    : "POST", 
      dataType  : "json", 
      url     : "TaskController/tasksave", 
      data    : formData, 
      encode    : true,
      error: function (xhr, ajaxOptions, thrownError) {
           console.log(xhr.status);
           console.log(xhr.responseText);
           console.log(thrownError);
       }
  })
    .done(function(datas) {
      if(! datas.success)
      {
         $.bootstrapGrowl(datas.message ,{
              type: 'danger',
              delay: 2000,
          });
      }
      else
      {   
          $('#addnewtask').modal('toggle');
          $("#task")[0].reset();
          $( "table" ).load( "#tbody tr" );
          $.bootstrapGrowl(datas.message ,{
              type: 'success',
              delay: 2000,
          });
      }
    });
});

// delete task 

$(document).on("click", ".btn-danger", function () {
     var userid = $(this).data('id');
     $(".modal-body #modaluserid").val( userid );
});

$('#deletetask').click(function(){
  var formData = {
    'id'   : $('#modaluserid').val()
  };

  $.ajax({
      type    : "POST", 
      dataType  : "json", 
      url     : "TaskController/taskdelete", 
      data    : formData, 
      encode    : true,
      error: function (xhr, ajaxOptions, thrownError) {
           console.log(xhr.status);
           console.log(xhr.responseText);
           console.log(thrownError);
       }
  })
    .done(function(datas) {
      if (!datas.success)
      {
         $.bootstrapGrowl(datas.message ,{
              type: 'info',
              delay: 2000,
          });
      }
      else
      {   
          $('#deletetask').modal('toggle');
          $( "table" ).load( "#tbody tr" );
          $.bootstrapGrowl(datas.message ,{
              type: 'danger',
              delay: 2000,
          });
      }
    });

});

//update task

$(document).on("click", ".btn-success", function () {
     var userid = $(this).data('id');
     var name = $(this).data('id2');
     var description = $(this).data('id3');
     $(".modal-body #editid").val( userid );
     $(".modal-body #editname").val( name );
     $(".modal-body #editdescription").val( description );
});

$('#updatetask').click(function(){

  var formData = {
    'id'   : $('#editid').val(),
    'name'   : $('#editname').val(),
    'description' : $('#editdescription').val()
  };

  $.ajax({
      type    : "POST", 
      dataType  : "json", 
      url     : "TaskController/taskupdate", 
      data    : formData, 
      encode    : true,
      error: function (xhr, ajaxOptions, thrownError) {
           console.log(xhr.status);
           console.log(xhr.responseText);
           console.log(thrownError);
       }

  })
    .done(function(datas) {
      if (!datas.success)
      {
         $.bootstrapGrowl(datas.message ,{
              type: 'danger',
              delay: 2000,
          });
      }
      else
      {   
          $('#edittask').modal('toggle');
          $("#task")[0].reset();
          $( "table" ).load( "#tbody tr" );
          $.bootstrapGrowl(datas.message ,{
              type: 'info',
              delay: 2000,
          });
      }
    });
});
