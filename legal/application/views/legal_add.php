<?php 
$arr_form        = array('class' => 'form-horizontal');
$arr_label       = array('class'=>'control-label ');

$arr_title       = array('name'  => 'title','id'  => 'title','class'   => 'form-control','value' => $this->input->post('title'));
$arr_cast 		 = array('name'  => 'cast','id'  => 'cast','class'   => 'form-control','value' => $this->input->post('cast'));
$arr_actor 		 = array('name'  => 'actor','id'  => 'actor','class'   => 'form-control','value' => $this->input->post('actor'));
$arr_actress	 = array('name'  => 'actress','id'  => 'actress','class'   => 'form-control','value' => $this->input->post('actress'));
$arr_director 	 = array('name'  => 'director','id'  => 'director','class'   => 'form-control','value' => $this->input->post('director'));
$arr_music_director	= array('name'  => 'music_director','id'  => 'music_director','class'   => 'form-control','value' => $this->input->post('music_director'));
$arr_producer	 = array('name'  => 'producer','id'  => 'producer','class'   => 'form-control','value' => $this->input->post('producer'));
$arr_banner		 = array('name'  => 'banner','id'  => 'banner','class'   => 'form-control','value' => $this->input->post('banner'));
$arr_release	 = array('name'  => 'release','id'  => 'datepicker1','class'   => 'form-control','value' => $this->input->post('release'));
$arr_partners	 = array('name'  => 'partners','id'  => 'partners','class'   => 'form-control','value' => $this->input->post('partners'));
$arr_org_language= array('name'  => 'org_language','id'  => 'org_language','class'   => 'form-control','value' => $this->input->post('org_language'));
$arr_subtitle	 = array('name'  => 'subtitle','id'  => 'subtitle','class'   => 'form-control','value' => $this->input->post('subtitle'));
$arr_censor		 = array('name'  => 'censor','id'  => 'censor','class'   => 'form-control','value' => $this->input->post('censor'));
$arr_censor_rating= array('name'  => 'censor_rating','id'  => 'censor_rating','class'   => 'form-control','value' => $this->input->post('censor_rating'));
$arr_agg_date	 = array('name'  => 'agg_date','id'  => 'datepicker2','class'   => 'form-control','value' => $this->input->post('agg_date'));
$arr_agg_exp	 = array('name'  => 'agg_exp','id'  => 'datepicker3','class'   => 'form-control','value' => $this->input->post('agg_exp'));
$arr_territory	 = array('name'  => 'territory','id'  => 'territory','class'   => 'form-control','value' => $this->input->post('territory'));
$arr_exclusive   = array('name'  => 'exclusive','id'  => 'exclusive','class'   => 'form-control','value' => $this->input->post('exclusive'));
$arr_source		 = array('name'  => 'source','id'  => 'source','class'   => 'form-control','value' => $this->input->post('source'));
$arr_format		 = array('name'  => 'format','id'  => 'format','class'   => 'form-control','value' => $this->input->post('format'));
$arr_delivery	 = array('name'  => 'delivery','id'  => 'delivery','class'   => 'form-control','value' => $this->input->post('delivery'));
$arr_synopsis	 = array('name'  => 'synopsis','id'  => 'synopsis','class'   => 'form-control','value' => $this->input->post('synopsis'));
$arr_images		 = array('name'  => 'images','id'  => 'images','class'   => 'form-control','value' => $this->input->post('images'));
$arr_posters	 = array('name'  => 'posters','id'  => 'posters','class'   => 'form-control','value' => $this->input->post('posters'));
$arr_file	 = array('type'=>'file','name'  => 'file','id'  => 'file','accept'=>'image/*','class'   => 'form-control,','value' => $this->input->post('file'));
$arr_sound		 = array('name'  => 'sound','id'  => 'sound','class'   => 'form-control','value' => $this->input->post('sound'));
$arr_drop	     = 'class = "form-control"';
$arr_strig	     = 'class = "form-control"  onChange="get_lang(this.value);"';
$arr_submit      = array('type'  => 'submit','id' => 'submit', 'name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary');

$lang    =array('' => 'Select','telugu'=>'Telugu','tamil'=>'Tamil','malyalam'=>'Malyalam','kanada'=>'Kanada','english'=>'English','hindi'=>'Hindi','other'=>'Other');
$strig   =array('' => 'Select','straight'=>'Straight','dub'=>'DUB');
$genr    =array('' => 'Select','romance'=>'Romance','comedy'=>'Comedy','suspence'=>'Suspence','action'=>'Action','thriller'=>'Thriller','family-drama'=>'Family-Drama','mythological'=>'Mythological','history'=>'History','science fiction'=>'Science Fiction','horror'=>'Horror','animation'=>'Animation','political'=>'Political','satire'=>'Satire','action/romance'=>'Action/Romance','Suspence/Thriller'=>'Suspence/Thriller','comedy/horror'=>'Comedy/Horror','others'=>'Others');
$rate    =array('' => 'Select','A'=>'A','B'=>'B','C'=>'C','newmovie'=>'New Movie');
$subtit=array('' => 'Select','yes'=>'YES','no'=>'NO');
$cens=array('' => 'Select','yes'=>'YES','no'=>'NO');
$censor_rate=array('' => 'Select','a'=>'A','u'=>'U','u/a'=>'U/A');
$exclu=array('' => 'Select','exclusive'=>'Exclusive','nonexclusive'=>'Non Exclusive');
$form=array('' => 'Select','hd'=>'HD','sd'=>'SD','tape'=>'TAPE');
$soun=array('' => 'Select','yes'=>'YES','no'=>'NO');
$arr_poc  	 = array('type'=>'hidden','name'  => 'poc','id'  => 'poc','class'   => 'form-control','value' => $this->session->userdata('name'));
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                     <h1 class="page-header">Rights</h1>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add an Agreement</h3>
                    </div>
                     <div class="panel-body">
                   <?php echo form_open_multipart('claims/insertdata', array('class' => '', 'autocomplete' => 'off')); ?>
                 <fieldset>
                   
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Movie Title <span class="">*</span>','Movie Title',$arr_label); ?>
                       <?php echo form_input($arr_title); ?>
                        <span class="help-inline"><?php echo form_error('title');?></span>
                    </div>                   
                 
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('Other Crew <span class="">*</span>','Other Crew',$arr_label); ?>
                       <?php echo form_input($arr_cast); ?>
                        <span class="help-inline"><?php echo form_error('cast');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Actor <span class="">*</span>','Actor',$arr_label); ?>
                       <?php echo form_input($arr_actor); ?>
                        <span class="help-inline"><?php echo form_error('actor');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Actress <span class="">*</span>','Actress',$arr_label); ?>
                       <?php echo form_input($arr_actress); ?>
                        <span class="help-inline"><?php echo form_error('actress');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('Director <span class="">*</span>','Director',$arr_label); ?>
                       <?php echo form_input($arr_director); ?>
                        <span class="help-inline"><?php echo form_error('director');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('Music Director <span class="">*</span>','Music Director',$arr_label); ?>
                       <?php echo form_input($arr_music_director); ?>
                        <span class="help-inline"><?php echo form_error('music_director');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Producer <span class="">*</span>','Producer',$arr_label); ?>
                       <?php echo form_input($arr_producer); ?>
                        <span class="help-inline"><?php echo form_error('producer');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Banner <span class="">*</span>','Banner',$arr_label); ?>
                       <?php echo form_input($arr_banner); ?>
                        <span class="help-inline"><?php echo form_error('banner');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <span><?php echo form_label('Date Of Theortical Release <span class="">*</span>','Date Of Theortical Release',$arr_label); ?>
                       <?php echo form_input($arr_release); ?></span>
                        <span class="help-inline"><?php echo form_error('release');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Language <span class="">*</span>','Language',$arr_label); ?>
                       <?php echo form_dropdown('language', $lang,$this->input->post('language'),$arr_drop);?>      
                        <span class="help-inline"><?php echo form_error('language');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('Partners / Provider Name <span class="">*</span>','Partners / Provider Name',$arr_label); ?>
                       <?php echo form_input($arr_partners); ?>
                        <span class="help-inline"><?php echo form_error('partners');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Straight / DUB <span class="">*</span>','Straight / DUB',$arr_label); ?>
                       <?php echo form_dropdown('stright', $strig,$this->input->post('stright'),$arr_strig);?>
                        <span class="help-inline"><?php echo form_error('stright');?></span>
                    </div>
                    <div id="getlang">
                    <?php if($this->input->post('straight')=='dub'){?>
                    <div class="form-group col-md-6 ">
					   <?php echo form_label('Original Language <span class="">*</span>','Original Language',$arr_label); ?>
                       <?php echo form_input($arr_org_language); ?>
                        <span class="help-inline"><?php echo form_error('org_language');?></span>
                    </div>
                    <?php } ?>
                    </div>                    
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Genre <span class="">*</span>','Genre',$arr_label); ?>
                      <?php echo form_dropdown('genre', $genr,$this->input->post('genre'),$arr_drop);?>
                        <span class="help-inline"><?php echo form_error('genre');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('Rating <span class="">*</span>','Rating',$arr_label); ?>
                        <?php echo form_dropdown('rating', $rate,$this->input->post('rating'),$arr_drop);?>
                        <span class="help-inline"><?php echo form_error('rating');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Subtitle <span class="">*</span>','Subtitle',$arr_label); ?>
                        <?php echo form_dropdown('subtitle', $subtit,$this->input->post('subtitle'),$arr_drop);?>
                        <span class="help-inline"><?php echo form_error('subtitle');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Censor <span class="">*</span>','Censor',$arr_label); ?>
                        <?php echo form_dropdown('censor', $cens,$this->input->post('censor'),$arr_drop);?>
                        <span class="help-inline"><?php echo form_error('censor');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Censor Rating <span class="">*</span>','Censor Rating',$arr_label); ?>
                        <?php echo form_dropdown('censor_rating', $censor_rate,$this->input->post('censor_rating'),$arr_drop);?>
                        <span class="help-inline"><?php echo form_error('censor_rating');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Agreement Start Date <span class="" >*</span>','Agreement Start Date',$arr_label); ?>
                       <?php echo form_input($arr_agg_date); ?>
                        <span class="help-inline"><?php echo form_error('agg_date');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Agreement End Date <span class="" id="datepicker">*</span>','Agreement End Date',$arr_label); ?>
                       <?php echo form_input($arr_agg_exp); ?>
                        <span class="help-inline"><?php echo form_error('agg_exp');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Territory <span class="">*</span>','Territory',$arr_label); ?>
                       <?php echo form_input($arr_territory); ?>
                        <span class="help-inline"><?php echo form_error('territory');?></span>
                    </div>
                      <div class="form-group col-md-6">  
					   <?php echo form_label('Exclusive / Non Exclusive <span class="">*</span>','Exclusive / Non Exclusive',$arr_label); ?>
                        <?php echo form_dropdown('exclusive', $exclu,$this->input->post('exclusive'),$arr_drop);?>
                       <span class="help-inline"><?php echo form_error('exclusive'); ?></span>
                   </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Source Type <span class="">*</span>','Source Type',$arr_label); ?>
                        <?php echo form_input($arr_source); ?>
                        <span class="help-inline"><?php echo form_error('source');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Format HD/SD/TAPE <span class="">*</span>','Format HD/SD/TAPE',$arr_label); ?>
                        <?php echo form_dropdown('format', $form,$this->input->post('format'),$arr_drop);?>
                        <span class="help-inline"><?php echo form_error('format');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Readiness for Delivery','Readiness for Delivery',$arr_label); ?>
                       <?php echo form_input($arr_delivery); ?>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Synopsis <span class="">*</span>','Synopsis',$arr_label); ?>
                       <?php echo form_input($arr_synopsis); ?>
                        <span class="help-inline"><?php echo form_error('synopsis');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Images <span class="">*</span>','Images',$arr_label); ?>
                       <?php echo form_input($arr_images); ?>
                        <span class="help-inline"><?php echo form_error('images');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Posters <span class="">*</span>','Posters',$arr_label); ?>
                       <?php echo form_input($arr_posters); ?>
                        <span class="help-inline"><?php echo form_error('posters');?></span>
                    </div>
                    <div class="form-group col-md-6 ">
                       <?php echo form_label('Sound Tracks <span class="">*</span>','Sound Tracks',$arr_label); ?>
                        <?php echo form_dropdown('sound', $soun,$this->input->post('sound'),$arr_drop);?>
                        <span class="help-inline"><?php echo form_error('sound');?></span>
                    </div>
                     <div class="form-group col-md-6 ">
                       <?php echo form_label('File input <span class="">*</span>','File input',$arr_label); ?>
                       <?php echo form_input($arr_file); ?>
                        <span class="help-inline"><?php echo form_error('file');?></span>
                    </div>
                      
                      </div>
                     
                      <div class="form-group col-md-6">  
			 <?php echo form_input($arr_poc); ?>
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
			'url':'<?php echo site_url();?>claims/getlang',
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!--  <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!--  <link rel="stylesheet" href="/resources/demos/style.css">-->
  
  <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
    $( "#datepicker2" ).datepicker();
    $( "#datepicker3" ).datepicker();
  });
  </script>
 
  