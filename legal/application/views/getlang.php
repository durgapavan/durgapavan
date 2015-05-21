<?php 
$arr_label       = array('class'=>'control-label ');
$arr_org_language= array('name'  => 'org_language','id'  => 'org_language','class'   => 'form-control','value' => $this->input->post('org_language'));
?>
<div class="form-group col-md-6 ">
   <?php echo form_label('Original Language <span class="">*</span>','Original Language',$arr_label); ?>
   <?php echo form_input($arr_org_language); ?>
    <span class="help-inline"><?php echo form_error('org_language');?></span>
</div>