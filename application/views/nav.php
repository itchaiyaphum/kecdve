<!DOCTYPE html>
<html lang="en">
<head>
<title>Internship Management System</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="googlebots" content="INDEX,FOLLOW" />
<meta name="language" CONTENT="en-th">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/uikit/css/uikit.min.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/uikit/css/uikit.gradient.min.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/base.min.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/uikit/css/components/datepicker.min.css');?>" />
</head>
<body>
	<div class="wrapper">
		<div class="container uk-container-center">
			<nav class="uk-navbar uk-margin-small-bottom">
            	<div class="uk-container uk-container-center">
            		<a class="uk-navbar-brand uk-hidden-small"
            			href="<?php echo base_url('');?>">Internship Management System</a>
            		<div class="uk-navbar-flip">
            			<ul class="uk-navbar-nav uk-hidden-small">
            				<?php 
            				if($this->tank_auth->is_logged_in()){ 
            				    $profileData = $this->profile_lib->getData();
            				?>
            				<li><a href="<?php echo base_url('profile');?>"><span class="uk-icon-user"></span> <?php echo $profileData->firstname;?> <?php echo $profileData->lastname;?></a></li>
            				<li class="uk-parent" data-uk-dropdown="" aria-haspopup="true"
            					aria-expanded="false"><a href="#"><i
            						class="uk-icon-caret-down"></i></a>
            					<div class="uk-dropdown uk-dropdown-navbar">
            						<ul class="uk-nav uk-nav-navbar">
            							<li><a href="<?php echo base_url('profile');?>"><i class="uk-icon-home"></i> หน้าหลัก</a></li>
            							<li class="uk-nav-divider"></li>
            							<?php if($profileData->user_type=='student'){ ?>
            							<li><a href="<?php echo base_url('profile/activity/');?>"><i class="uk-icon-book"></i> บันทึกการเรียน</a></li>
            							<li><a href="<?php echo base_url('profile/time/');?>"><i class="uk-icon-clock-o"></i> บันทึกเวลาเรียน</a></li>
            							<li><a href="<?php echo base_url('profile/evaluation/');?>"><i class="uk-icon-pie-chart"></i> สรุปผลการฝึกงาน</a></li>
            							<?php } elseif($profileData->user_type=='trainer'){ ?>
            							<li><a href="<?php echo base_url('trainer/activity/');?>"><i class="uk-icon-book"></i> บันทึกการเรียน</a></li>
            							<li><a href="<?php echo base_url('trainer/time/');?>"><i class="uk-icon-clock-o"></i> บันทึกเวลาเรียน</a></li>
            							<li><a href="<?php echo base_url('trainer/evaluation/');?>"><i class="uk-icon-pie-chart"></i> ประเมินผลการฝึกงาน</a></li>
            							<?php } elseif($profileData->user_type=='advisor'){ ?>
            							<li><a href="<?php echo base_url('advisor/activity/');?>"><i class="uk-icon-book"></i> บันทึกการเรียน</a></li>
            							<li><a href="<?php echo base_url('advisor/time/');?>"><i class="uk-icon-clock-o"></i> บันทึกเวลาเรียน</a></li>
            							<li><a href="<?php echo base_url('advisor/evaluation/');?>"><i class="uk-icon-pie-chart"></i> ประเมินผลการฝึกงาน</a></li>
            							<?php } elseif($profileData->user_type=='admin'){ ?>
                        				<li><a href="<?php echo base_url('admin/');?>"><i class="uk-icon-lock"></i> เข้าระบบจัดการข้อมูล</a></li>
                        				<?php } ?>
            							<li class="uk-nav-divider"></li>
            							<li><a href="<?php echo base_url('settings/profile');?>"><i class="uk-icon-gear"></i> แก้ไขข้อมูลส่วนตัว</a></li>
            							<li><a href="<?php echo base_url('auth/logout');?>"><i class="uk-icon-power-off"></i> ออกจากระบบ</a></li>
            						</ul>
            					</div>
            				</li>
            				<?php } else { ?>
            				<li><a href="<?php echo base_url('auth/login');?>"><span class="uk-icon-lock"></span> ลงชื่อเข้าสู่ระบบ</a></li>
            				<?php } ?>
            			</ul>
            		</div>
            		<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
            		<div class="uk-navbar-brand uk-navbar-center uk-visible-small">
            			<a href="<?php echo base_url('');?>">IMS</a>
            		</div>
            	</div>
            </nav>
            <div id="offcanvas" class="uk-offcanvas">
            	<div class="uk-offcanvas-bar">
            		<ul class="uk-nav uk-nav-offcanvas">
            			<li><a href="<?php echo base_url('');?>"><i class="uk-icon-home"></i> หน้าหลัก</a></li>
            			<li class="uk-nav-divider"></li>
            			<?php 
            			if($this->tank_auth->is_logged_in()){ 
            			     $profileData = $this->profile_lib->getData();
            			?>
            				<?php if($profileData->user_type=='student'){ ?>
            				<li><a href="<?php echo base_url('profile/activity/');?>"><i class="uk-icon-book"></i> บันทึกการเรียน</a></li>
            				<li><a href="<?php echo base_url('profile/time/');?>"><i class="uk-icon-clock-o"></i> บันทึกเวลาเรียน</a></li>
            				<li><a href="<?php echo base_url('profile/evaluation/');?>"><i class="uk-icon-pie-chart"></i> สรุปผลการฝึกงาน</a></li>
            				<?php } elseif($profileData->user_type=='trainer'){ ?>
            				<li><a href="<?php echo base_url('trainer/activity/');?>"><i class="uk-icon-book"></i> บันทึกการเรียน</a></li>
            				<li><a href="<?php echo base_url('trainer/time/');?>"><i class="uk-icon-clock-o"></i> บันทึกเวลาเรียน</a></li>
            				<li><a href="<?php echo base_url('trainer/evaluation/');?>"><i class="uk-icon-pie-chart"></i> ประเมินผลการฝึกงาน</a></li>
            				<?php } elseif($profileData->user_type=='advisor'){ ?>
            				<li><a href="<?php echo base_url('advisor/activity/');?>"><i class="uk-icon-book"></i> บันทึกการเรียน</a></li>
            				<li><a href="<?php echo base_url('advisor/time/');?>"><i class="uk-icon-clock-o"></i> บันทึกเวลาเรียน</a></li>
            				<li><a href="<?php echo base_url('advisor/evaluation/');?>"><i class="uk-icon-pie-chart"></i> ประเมินผลการฝึกงาน</a></li>
            				<?php } elseif($profileData->user_type=='admin'){ ?>
            				<li><a href="<?php echo base_url('admin/');?>"><i class="uk-icon-lock"></i> เข้าระบบจัดการข้อมูล</a></li>
            				<?php } ?>
            				<li class="uk-nav-divider"></li>
            				<li><a href="<?php echo base_url('settings/profile');?>"><i class="uk-icon-gear"></i> แก้ไขข้อมูลส่วนตัว</a></li>
            				<li><a href="<?php echo base_url('auth/logout');?>"><i class="uk-icon-power-off"></i> ออกจากระบบ</a></li>
            			<?php } else { ?>
            				<li><a href="<?php echo base_url('auth/login');?>"><span class="uk-icon-lock"></span> ลงชื่อเข้าสู่ระบบ</a></li>
            			<?php } ?>
            		</ul>
            	</div>
            </div>
			