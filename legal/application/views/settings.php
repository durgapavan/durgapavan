		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Settings</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <?php echo anchor('claims/addusers', '<button class="btn btn-sm btn-info">Add Users</button>');?> 
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Log List
                        </div>
                        <div class="panel-body">
                        
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>S.No</th>
					<th>Name</th>
					<th>Email</th>
                                        <th>Department</th>
                                        <th>Last Login</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
								  $sno=1;
								   if(isset($data)){
								  foreach($data as $row){?>
                                        <tr class="<?php if($sno%2==0){echo 'even';}else{echo 'odd';}?>">
                                          <td><?php echo $sno;?></td>
					<td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['email'];?></td>
					<td><?php echo $row['dept_id'];?></td>
                                        <td><?php echo $row['lastlogin'];?></td>
                                        
											
                                            
                                          </tr>
                                        <?php $sno++;}}?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
 <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
 <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
			