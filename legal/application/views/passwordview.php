<?php 
$arr_form        = array('class' => 'form-horizontal');
$arr_label       = array('class'=>'control-label ');

$arr_cpassword      = array('type' => 'password' ,'name'  => 'current_password','id'  => 'current_password','class'   => 'form-control','value' => $this->input->post('current_password'));
$arr_npassword	 = array('type' => 'password' ,'name'  => 'new_password','id'  => 'new_password','class'   => 'form-control','value' => $this->input->post('new_password'));
$arr_cnpassword = array('type' => 'password' , 'name'  => 'confirm_new_password','id'  => 'confirm_new_password','class'   => 'form-control','value' => $this->input->post('confirm_new_password'));
//$arr_actress	 = array('name'  => 'actress','id'  => 'actress','class'   => 'form-control','value' => $this->input->post('actress'));
$arr_submit      = array('type'  => 'submit','id' => 'submit', 'name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary');
$arr_drop	     = 'class = "form-control"';

?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                     <h1 class="page-header">Change Password</h1>
                </div>
                <div class="col-lg-12">
                     <?php
	if(!empty($msg)){
		echo "<div style='color:red'>".$msg."</div>";
	}
?>
                </div>
                
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add New Password</h3>
                    </div>
                     <div class="panel-body">
                   <?php echo form_open('claims/updatepassword', array('class' => '', 'autocomplete' => 'off')); ?>
                 <fieldset>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Current Password <span class="">*</span>','Current Password',$arr_label); ?>
                       <?php echo form_input($arr_cpassword); ?>
                        <span class="help-inline"><?php echo form_error('current_password');?></span>
                    </div>
                      <div class="form-group col-md-6 ">
                       <?php echo form_label('New Password <span class="">*</span>','New Password',$arr_label); ?>
                       <?php echo form_input($arr_npassword); ?>
                        <span class="help-inline"><?php echo form_error('new_password');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('Confirm New Password <span class="">*</span>','Confirm New Password',$arr_label); ?>
                       <?php echo form_input($arr_cnpassword); ?>
                        <span class="help-inline"><?php echo form_error('confirm_new_password');?></span>
                    </div> 
                    </fieldset>
                    <fieldset class="form-actions">
                    	<?php echo form_input($arr_submit); ?>
                    </fieldset>
                    <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>   
        </div>
