<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rights</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Agreement List
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                
                                
                            </div>
                               <div class="dataTable_wrapper">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>S.No</th>
<!--                 only admin and manger an view below fields                        -->
                                     <?php 
                            $role_id = $this->session->userdata("role_id");
                            $dept_id = $this->session->userdata("dept_id"); 
                             if(($dept_id==3)&&($role_id==3))
                            {
                         ?>    
					<th>Title</th>
                                        <th>Agreement Start Date</th>
                                        <th>Agreement End Date</th>
                                        <th>Producer</th>
                                        <th>Banner</th>
                                         <th>Language</th>
                                          <th>Exclusive/Non Exclusive</th>
                                           <th>Actor</th>
                                            <th>Actress</th>
                       
                                        
                                         
					</tr>
                                    </thead>
                                    <tbody>
                                    <?php $sno=1; if(isset($data)){ foreach($data as $row){?>
                                        <tr class="<?php if($sno%2==0){echo 'even';}else{echo 'odd';}?>">
                                          <td><?php echo $sno;?></td>
                                          
                         ?>
					 <td><?php echo $row['title'];?></td>
                                          <td><?php echo $row['agg_date'];?></td>
                                           <td><?php echo $row['agg_exp'];?></td>
                                            <td><?php echo $row['producer'];?></td>
                                             <td><?php echo $row['banner'];?></td>
                                              <td><?php echo $row['language'];?></td>
                                           <td><?php echo $row['org_language'];?></td>
                                            <td><?php echo $row['actor'];?></td>
                                             <td><?php echo $row['actress'];?></td>
                                             <?php         }
                          ?>
                                
					
                    
                                            
                                          </tr>
                                          
                                          
                  <div class="modal fade" id="myModal<?php echo $sno;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">More Details About <?php echo $row['title'];?></h4>
                </div>
                <div class="modal-body">
                   <div class="row">
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-md-3">Cast :</label>
                                    <p class="col-md-3"><?php echo $row['cast'];?></p>
                                     <label class="col-md-3">Actor :</label>
                                    <p class="col-md-3"><?php echo $row['actor'];?></p>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3">Actress :</label>
                                    <p class="col-md-3"><?php echo $row['actress'];?></p>
                                     <label class="col-md-3">Director :</label>
                                    <p class="col-md-3"><?php echo $row['director'];?></p>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-3">Music Director :</label>
                                    <p class="col-md-3"><?php echo $row['music_director'];?></p>
                                     <label class="col-md-3">Producer :</label>
                                    <p class="col-md-3"><?php echo $row['producer'];?></p>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-3">Release Date :</label>
                                    <p class="col-md-3"><?php echo $row['release'];?></p>
                                     <label class="col-md-3">Partners :</label>
                                    <p class="col-md-3"><?php echo $row['partners'];?></p>
                                </div>
                            <div class="form-group">
                                    <label class="col-md-3">Subtitle :</label>
                                    <p class="col-md-3"><?php echo $row['subtitle'];?></p>
                                     <label class="col-md-3">Censor :</label>
                                    <p class="col-md-3"><?php echo $row['censor'];?></p>
                                </div><div class="form-group">
                                    <label class="col-md-3">Censor Rating :</label>
                                    <p class="col-md-3"><?php echo $row['censor_rating'];?></p>
                                     <label class="col-md-3">Territory :</label>
                                    <p class="col-md-3"><?php echo $row['territory'];?></p>
                                </div>
                            
                            <div class="form-group">
                                    <label class="col-md-3">Exclusive :</label>
                                    <p class="col-md-3"><?php echo $row['exclusive'];?></p>
                                     <label class="col-md-3">Source Type :</label>
                                    <p class="col-md-3"><?php echo $row['source'];?></p>
                                </div>
                            <div class="form-group">
                                    <label class="col-md-3">Format :</label>
                                    <p class="col-md-3"><?php echo $row['format'];?></p>
                                     <label class="col-md-3">Sound Track:</label>
                                    <p class="col-md-3"><?php echo $row['sound'];?></p>
                                </div>
                             <div class="form-group">
                                    <label class="col-md-3">Synopsis </label>
                                    <p class="col-md-3"><?php echo $row['synopsis'];?></p>
                                     <label class="col-md-3">Images :</label>
                                    <p class="col-md-3"><?php echo $row['images'];?></p>
                                </div>
                            <div class="form-group">
                                    <label class="col-md-3">Posters :</label>
                                    <p class="col-md-3"><?php echo $row['posters'];?></p>
                                     
                                </div>
                                                                            
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
                            
                            <!-- Modal -->
                            
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
			
			


