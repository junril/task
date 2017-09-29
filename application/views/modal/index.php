<div class="modal fade" id="addnewtask" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    
    <div class="modal-content">
      
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          
          <h4 class="modal-title" id="purchaseLabel">Create New Task</h4>
      
      </div>

      <form id="task" method="POST" action="TaskController/tasksave/">

      <div class="modal-body">
        
        <div class="container">
          
          <div class="row">
            
              <div class="col-sm-6 ">

                  <div class="col-sm-12 form-group">

                    <label>Name</label>

                      <input type="text" placeholder="Enter Task Name" name="name" id="name" class="form-control">

                  </div>

                  <div class="col-sm-12 form-group">

                    <label>Description</label>

                      <textarea  placeholder="Place task Description here" name="description" class="form-control" id="description" style="height: 100px"></textarea>
                  </div>
          
              </div>

          </div>
        
        </div>
      
      </div>
      
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        
        <button type="button" class="btn btn-primary" id="savetask" ><i class="fa fa-save"></i> Create Now</button>
      
      </div>
    
      </form> 

    </div>
  
  </div>

</div>

<div class="modal fade" id="deletetask" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    
    <div class="modal-content">
      
      <form id="task" method="POST" action="TaskController/taskdelete">

      <div class="modal-body">
        
        <div class="container">
          
          <div class="row">
            
              <div class="col-sm-6 ">

                  <p> Are you sure you want to delete this task? </p>
                  <input type="hidden" name="userid" id="modaluserid" value=""/>
              </div>

          </div>
        
        </div>
      
      </div>
      
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        
        <button type="button" class="btn btn-danger" id="deletetask" ><i class="fa fa-trash"></i> Delete Now</button>
      
      </div>
    
      </form> 

    </div>
  
  </div>

</div>

<div class="modal fade" id="edittask" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    
    <div class="modal-content">
      
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          
          <h4 class="modal-title" id="purchaseLabel">Update Task</h4>
      
      </div>

      <form id="task" method="POST" action="TaskController/tasksave/">

      <div class="modal-body">
        
        <div class="container">
          
          <div class="row">
            
              <div class="col-sm-6 ">
                 <div class="col-sm-12 form-group">
                      <input type="hidden" placeholder="Enter Task Name" name="editid" id="editid" class="form-control" value="">
                    <label>Name</label>

                      <input type="text" placeholder="Enter Task Name" name="editname" id="editname" class="form-control" value="">

                  </div>

                  <div class="col-sm-12 form-group">

                    <label>Description</label>

                      <textarea  placeholder="Place task Description here" name="editdescription" class="form-control" id="editdescription" style="height: 100px"></textarea>
                  </div>
                
              </div>

          </div>
        
        </div>
      
      </div>
      
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        
        <button type="button" class="btn btn-primary" id="updatetask" ><i class="fa fa-save"></i> Update Now</button>
      
      </div>
    
      </form> 

    </div>
  
  </div>

</div>
        