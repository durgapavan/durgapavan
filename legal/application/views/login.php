<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
	<title>.:: | Admin ::.</title>

	<!--=== CSS ===-->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />	
	<link href="<?php echo base_url(); ?>assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/timeline.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/dataTables.responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-social.css" rel="stylesheet" >
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet" >
    <link href="<?php echo base_url(); ?>assets/css/morris.css" rel="stylesheet" >
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" >	
	<!--=== JS ===-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>
</head>
<body>
    
 <div id="wrapper">
 <style>
		.alert {  padding: 10px 36px 0px 15px!important;  margin-bottom: 0px!important; color: #F00;text-align:center}
		.reg {  padding-top: 10px; }
		.powered{margin:0px; text-align:center}
	</style>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
				<?php if(isset($msg)){?>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="alert alert-error fade in">
                          <a data-dismiss="alert" class="close">&times;</a>
                            <?php echo $msg;?>
                        
                        </div>
                    </div>
                </div>
                <?php }?>

                    <div class="panel-body">
                        <?php echo form_open('claims/logindata', array('autocomplete' => 'off')); ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" value="<?php if(isset($username)){echo $username;}?>" autofocus placeholder="User Name *" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password" value="<?php if(isset($password)){echo $password;}?>" tabindex="2" placeholder="Password *">
                                </div>
                               <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="submit" value="Submit" tabindex="5" />
                            </fieldset>
                        <?php echo form_close(); ?>
			</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="powered">Powered by <a href="http://whackedout.in" target="_blank">Whacked Out</a></p>
        </div>
    </footer>
</body>
</html>