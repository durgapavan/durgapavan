
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <?php echo anchor('claims/login','Dashboard', array('class' => 'navbar-brand'));?>
            </div>
            <ul class="nav navbar-top-links navbar-right">
			 <li style="text-transform:capitalize;">Welcome <?php echo $this->session->userdata('name');?></li>
                <li class="dropdown">
                <?php echo anchor('#','<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>', array('class' => 'dropdown-toggle','data-toggle' => 'dropdown'));?>
                    <ul class="dropdown-menu dropdown-user">
                         <?php 
                            $role_id = $this->session->userdata("role_id");
                            $dept_id = $this->session->userdata("dept_id"); 
                            if(($dept_id==1 || $dept_id==3)&&($role_id==1 || $role_id==2))
                            {
                         ?>
                         <li><?php echo anchor('claims/settings','Settings');?></li>
                        <?php
                            }
                          ?>
                      <li><?php echo anchor('claims/changepassword','Change Password');?></li>
                       <li><?php echo anchor('claims/logout','Logout');?></li>
                    </ul>
                </li>
            </ul>
           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            
                        </li>
                        <?php 
                            $role_id = $this->session->userdata("role_id");
                            $dept_id = $this->session->userdata("dept_id"); 
                            if(($dept_id==1 || $dept_id==3)&&($role_id==1 || $role_id==2))
                            {
                         ?>
                        <li><?php echo anchor('claims/show','Rights');?></li>
                        <?php
                            }
                          ?>
                        <li><?php echo anchor('claims/claims_show','Claims');?></li>
                        <li><?php echo anchor('claims/overlaps_show','Overlaps');?></li>
                        <li><?php echo anchor('claims/agreement_expiry','Agreement Expiry');?></li>
                        
                          <?php 
                            $role_id = $this->session->userdata("role_id");
                            $dept_id = $this->session->userdata("dept_id"); 
                            if(($dept_id==3) &&($role_id==3))
                            {
                         ?>
                        <li><?php echo anchor('claims/claims_rights_show','Rights User');?></li>
                        <?php
                            }
                          ?>
                        
                        <?php /*?><li>
                           <?php echo anchor('#','Charts<span class="fa arrow"></span>');?> 
                            <ul class="nav nav-second-level">
                               <li><?php echo anchor('users','Admin Details');?></li>
                               <li><?php echo anchor('users','Admin Details');?></li>
                            </ul>
                           
                        </li><?php */?>
                    </ul>
                </div>
               
            </div>
        </nav>    
      
