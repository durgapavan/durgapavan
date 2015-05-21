<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agreement Expiry</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <?php echo anchor('claims/agreement_expiry', '<button class="btn btn-sm btn-info">1 Month Expiry</button>');?>
                    <?php echo anchor('claims/agreement_expiry14days', '<button class="btn btn-sm btn-info"> 14 Days Expiry</button>');?>
                    <?php echo anchor('claims/agreement_expiry1day', '<button class="btn btn-sm btn-info">1 Day Expiry</button>');?> 
                    <?php echo anchor('claims/agreement_todayexpired', '<button class="btn btn-sm btn-info">Today Expired</button>');?>
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                        
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>S.No</th>
					<th>Title</th>
                                        <th>Agreement Start Date</th>
                                        <th>Agreement End Date</th>
                                        <th>Producer</th>
                                        <th>Banner</th>
                                         <th>Poc</th>
                                         
					</tr>
                                    </thead>
                                    <tbody>
                                      <?php $sno=1;  if(isset($data)){
                                         foreach($data as $row){?>
                                        <tr class="<?php if($sno%2==0){echo 'even';}else{echo 'odd';}?>">
                                          <td><?php echo $sno;?></td>
					 <td><?php echo $row['title'];?></td>
                                          <td><?php echo $row['agg_date'];?></td>
                                           <td><?php echo $row['agg_exp'];?></td>
                                            <td><?php echo $row['producer'];?></td>
                                             <td><?php echo $row['banner'];?></td>
                                             <td><?php echo $row['poc'];?></td>
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
			
			


