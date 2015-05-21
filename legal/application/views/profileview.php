<div id="page-wrapper">
 <div class="row">
<div class=" col-md-12 col-lg-12 "> 
 
                    <h1 class="page-header"><?php echo ucfirst($res['title']);?></h1>
                
            <div class="panel-body">
              <div class="col-md-6">
                  
                  <table class="table table-bordered table-user-information">
                    <tbody>
                      <tr>
                        <th>Movie Title</th>
                        <td><?php echo $res['title'];?></td>
                      </tr>
                      <tr>
                       <th>Other Crew</th>
                        <td><?php echo $res['cast'];?></td>
                      </tr>
                      <tr>
                       <th>Actor</th>
                        <td><?php echo $res['actor'];?></td>
                      </tr>
                   
                         <tr>
                          
                       <th>Actress</th>
                        <td><?php echo $res['actress'];?></td>
                      </tr>
                        <tr>
                   <th>Director</th>
                        <td><?php echo $res['director'];?></td>
                      </tr>
                     
                        <tr>
                            <th>Music Director</th>
                        <td><?php echo $res['music_director'];?></td>
                        </tr>
                        <tr>
                        <th>Producer</th>
                        <td><?php echo $res['producer'];?></td>
                      </tr>
                        <tr>
                        <th>Banner</th>
                        <td><?php echo $res['banner'];?></td>
                      </tr>
                      <tr>
                        <th>Date Of Theortical Release</th>
                        <td><?php echo $res['release'];?></a></td>
                      </tr>
                                              
                     <tr>
                       <th>Partners</th>
                        <td><?php echo $res['partners'];?></td>
                      </tr>
                   
                         <tr>
                          
                      <th>Original Language</th>
                        <td><?php echo $res['org_language'];?></td>
                      </tr>
                        <tr>
                       <th>Subtitle</th>
                        <td><?php echo $res['subtitle'];?></td>
                      </tr>
                     
                        
                        <th>Censor</th>
                        <td><?php echo $res['censor'];?></td>
                      </tr>
                        <tr>
                        <th>Censor Rating</th>
                        <td><?php echo $res['censor_rating'];?></td>
                      </tr>
					     <tr>
                       <th>Agreement Start Date</td>
                        <td><?php echo $res['agg_date'];?></td>
                      </tr>
					     <tr>
                       <th>Agreement End Date</th>
                        <td><?php echo $res['agg_exp'];?></td>
                      </tr>
					     <tr>
                       <th>Territory</th>
                        <td><?php echo $res['territory'];?></td>
                      </tr>
					     <tr>
                        <th>Exclusive/Non Exclusive</th>
                        <td><?php echo $res['exclusive'];?></td>
                      </tr>
					     <tr>
                        <th>Source Type</th>
                        <td><?php echo $res['source'];?></td>
                      </tr>
					     <tr>
                        <th>Format</th>
                        <td><?php echo $res['format'];?></td>
                      </tr>
					     <tr>
                        <th>Readiness for Delivery</th>
                        <td><?php echo $res['delivery'];?></td>
                      </tr>
					     <tr>
                        <th>Synopsis</th>
                        <td><?php echo $res['synopsis'];?></td>
                      </tr>
					     <tr>
                        <th>Censor Rating</th>
                        <td><?php echo $res['censor_rating'];?></td>
                      </tr>
					     <tr>
                        <th>Images</th>
                        <td><?php echo $res['images'];?></td>
                      </tr>
					     <tr>
                       <th>Posters</th>
                        <td><?php echo $res['posters'];?></td>
                      </tr>
					  <tr>
                        <th>Sound Track 5.1</th>
                        <td><?php echo $res['sound'];?></td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <span class="pull-right">
                      <?php echo anchor('claims/doc_view', '<button class="btn btn-sm btn-info">Save As DOC</button>');?>&nbsp;&nbsp;
                   <?php echo anchor('claims/pdf_view', '<button class="btn btn-sm btn-info">Save As PDF</button>');?>
                  </span>
                </div>
              </div>
</div></div></div>
                 