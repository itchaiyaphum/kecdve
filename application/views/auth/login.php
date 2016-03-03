<div class="uk-vertical-align uk-text-center uk-height-1-1 uk-margin-large-top uk-margin-large-bottom">
	<div class="uk-vertical-align-middle" style="width: 450px;">
		<h3>ลงชื่อเข้าสู่ระบบ</h3>
		<?php 
		$attributes = array('class' => 'uk-panel uk-panel-box uk-form', 'id' => 'loginform', 'method'=>'post');
		echo form_open('auth/login',$attributes);
		?>
			<div class="message">
				
			</div>
			<div class="uk-form-row">
				<?php 
				$data = array(
				    'name'          => 'email',
				    'id'            => 'email',
				    'maxlength'     => '100',
				    'placeholder'   => 'อีเมล์',
				    'class'         => 'uk-width-1-1 uk-form-large',
				    'value'         => set_value('email')
				);
				echo form_input($data);
				?>
			</div>
			<div class="uk-form-row">
				<?php 
				$data = array(
				    'name'          => 'password',
				    'id'            => 'password',
				    'maxlength'     => '100',
				    'placeholder'   => 'รหัสผ่าน',
				    'class'         => 'uk-width-1-1 uk-form-large',
				    'value'         => set_value('password')
				);
				echo form_password($data);
				?>
			</div>
			<div class="uk-form-row">
				<?php 
				$data = array(
				    'class'         => 'uk-width-1-1 uk-button uk-button-primary uk-button-large',
				    'value'         => 'เข้าสู่ระบบ'
				);
				echo form_submit($data);
				?>
			</div>
			
			<br/>
			<div>(สำหรับนักเรียน)<br/>user: student@demo.com, password: 123456</div>
			<!-- 
			<div>(สำหรับอาจารย์ที่ปรึกษา)<br/>user: advisor@demo.com, password: 123456</div>
			<div>(สำหรับผู้คุมฝึกงาน)<br/>user: trainer@demo.com, password: 123456</div>
			 -->
		<?php echo form_close();?>
	</div>
</div>