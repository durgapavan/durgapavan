<?php 
$arr_form        = array('class' => 'form-horizontal');
$arr_label       = array('class'=>'control-label ');

$arr_name       = array('name'  => 'name','id'  => 'name','class'   => 'form-control','value' => $this->input->post('name'));
$arr_email 	 = array('name'  => 'email','id'  => 'email','class'   => 'form-control','value' => $this->input->post('email'));
$arr_password 		 = array('type' => 'password' , 'name'  => 'password','id'  => 'password','class'   => 'form-control','value' => $this->input->post('password'));

$arr_submit      = array('type'  => 'submit','id' => 'submit', 'name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary');
$arr_drop	     = 'class = "form-control"';
$role =array('' => 'Select','1'=>'Admin','2'=>'Manager','3'=>'User');
$dept   =array('' => 'Select','1'=>'All','2'=>'Entertainment','3'=>'Claims','4'=>'legal');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                     <h1 class="page-header">Copy Rights</h1>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add User</h3>
                    </div>
                     <div class="panel-body">
                   <?php echo form_open('claims/insertrolesdata', array('class' => '', 'autocomplete' => 'off')); ?>
                 <fieldset>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Name <span class="">*</span>','Name',$arr_label); ?>
                       <?php echo form_input($arr_name); ?>
                        <span class="help-inline"><?php echo form_error('name');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Roles <span class="">*</span>','Roles',$arr_label); ?>
                       <?php echo form_dropdown('role_id', $role,$this->input->post('Roles'),$arr_drop);?>      
                        <span class="help-inline"><?php echo form_error('Roles');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('Email <span class="">*</span>','email',$arr_label); ?>
                       <?php echo form_input($arr_email); ?>
                        <span class="help-inline"><?php echo form_error('posters');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Department <span class="">*</span>','Department',$arr_label); ?>
                        <?php echo form_dropdown('dept_id', $dept,$this->input->post('department'),$arr_drop);?>
                        <span class="help-inline"><?php echo form_error('department');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('Password <span class="">*</span>','password',$arr_label); ?>
                       <?php echo form_input($arr_password); ?>
                        <span class="help-inline"><?php echo form_error('password');?></span>
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
<script>
	function get_lang(val)
	{
			var re = 0;
			$.ajax({
			'url':'<?php echo site_url();?>/claims/getlang',
			'type':'POST',
			'async':false,
			'data':{'val': val},
			'success':function(data){
						 re = data;						 
			 }
			});
			document.getElementById("getlang").innerHTML=re;
	}
</script>