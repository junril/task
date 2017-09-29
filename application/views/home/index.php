<?=$modal?>

<div class="container"> 

    <div class="row ">

		<button type="button" class="btn btn-primary btn-large" data-toggle="modal" data-target="#addnewtask"><i class="fa fa-plus"></i> Create New Task</button>

		<br><br>
			
		<div class="col-md-12" style="background-color:#e8eff9; ">

			<table class="table">
			   
			    <thead>
			   
			        <tr>
			   
			            <th width="15%">Name</th>
			   
			            <th width="30%">Description</th>
			   
			            <th width="15%">Created at</th>
			   
			            <th width="15%">Updated at</th>
			   
			            <th width="20%" style="text-align: center;">Action</th>

			        </tr>

			    </thead>

			    <tbody id="tbody">
	        		<?Php if (!empty($tasklist)):?>
                		<?php 
                			foreach ($tasklist as $tasklists): 

                				$datestring = '%Y %m %d - %h:%i %a';
								$time = $tasklists->dateCreated;
								$time1 = $tasklists->dateUpdated;
                		?>

			        		<tr>
			        			<input type="hidden" name="id" value="<?= $tasklists->id; ?>">
					            <td><?= $tasklists->name; ?></td>
					            
					            <td><?= $tasklists->description; ?></td>
					            
					            <td><?= mdate($datestring, $time); ?></td>
					            
					            <td><?= mdate($datestring, $time1); ?></td>
					            
					            <td>
					           

						            <button class="btn btn-success" data-toggle="modal" data-id="<?= $tasklists->id; ?>" data-id2="<?= $tasklists->name; ?>" data-id3="<?= $tasklists->description; ?>" data-target="#edittask" ><i class="fa fa-pencil"></i> Edit Task</button>
						            
						            <button type="button" class="btn btn-danger" data-toggle="modal" data-id="<?= $tasklists->id; ?>" data-target="#deletetask" ><i class="fa fa-trash"></i> Delete Task</button>


					            </td>

					        </tr>
			    		<?php endforeach; ?>

					<?php  else: echo "<tr><td colspan='5'>no data found</td></tr>"; endif;?>
	    		</tbody>

			</table>

        </div>

	</div>

</div>

