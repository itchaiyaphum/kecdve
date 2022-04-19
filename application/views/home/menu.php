<div class="nav" id="menubar">
	<!-- <div class="text">
		<h1>ระบบนิเทศติดตามการฝึกงาน</h1>
		<h1>วิทยาลัยการอาชีพแก้งคร้อ</h1>
	</div> -->
	<ul>
		<li class=       <?php echo $this->helper_lib->getActiveMainMenu('');?>">
			<a href="<?php echo base_url(''); ?>">หน้าหลัก</a>
		</li>

		<li class="<?php echo $this->helper_lib->getActiveMainMenu('about');?>">
			<a href="<?php echo base_url('about/'); ?>">เกี่ยวกับเรา</a>
		</li>

		<li class="<?php echo $this->helper_lib->getActiveMainMenu('contact');?>">
			<a href="<?php echo base_url('contact/'); ?>">ติดต่อเรา</a>
		</li>

		<li class="<?php echo $this->helper_lib->getActiveMainMenu('help');?>">
			<a href="<?php echo base_url('help/'); ?>">คู่มือการใช้งาน (สำหรับนักศึกษา)</a>
		</li>

	</ul>
</div>
