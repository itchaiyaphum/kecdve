<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
			<?php echo $leftmenu;?>
		</div>
		<div class="tm-main uk-width-medium-3-4 uk-margin-top uk-margin-bottom">
            <form action="<?php echo base_url('admin/users/edit');?>" method="post" name="adminForm" class="uk-form uk-form-horizontal">
            
    			<div class="uk-clearfix">
    				<div class="uk-float-left">
    					<h1>จัดการข้อมูลผู้ใช้ [<?php echo (is_null($item->id))?'เพิ่ม':'แก้ไข';?>]</h1>
    				</div>
        			<div class="uk-float-right">
        				<input type="submit" value="บันทึกข้อมูล" class="uk-button uk-button-success"/>
        				<a href="<?php echo base_url('/admin/users/');?>" class="uk-button uk-button-danger">ยกเลิก</a>
        			</div>
    			</div>
    			<hr/>
    			
            	<div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-it">ชื่อ</label>
                    <div class="uk-form-controls">
                        <input type="text" id="form-h-it" name="firstname" value="<?php echo $item->firstname;?>" class="uk-width-1-2">
                    </div>
                </div>
            	<div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-it">นามสกุล</label>
                    <div class="uk-form-controls">
                        <input type="text" id="form-h-it" name="lastname" value="<?php echo $item->lastname;?>" class="uk-width-1-2">
                    </div>
                </div>
            	<div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-it">ประเภทผู้ใช้</label>
                    <div class="uk-form-controls">
                    	<select name="user_type" class="uk-width-1-2">
                        	<option value="">- เลือกประเภทผู้ใช้ -</option>
                        	<option value="student" <?php echo ($item->user_type=='student')?'selected="selected"':'';?>>นักศึกษา</option>
                        	<option value="advisor" <?php echo ($item->user_type=='advisor')?'selected="selected"':'';?>>อาจารย์ที่ปรึกษา</option>
                        	<option value="trainer" <?php echo ($item->user_type=='trainer')?'selected="selected"':'';?>>ผู้ควบคุมการฝึกงาน</option>
                        	<option value="staff" <?php echo ($item->user_type=='staff')?'selected="selected"':'';?>>เจ้าหน้าที่สถานศึกษา</option>
                        </select>
                    </div>
                </div>
            	<div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-it">อีเมล์</label>
                    <div class="uk-form-controls">
                        <input type="text" id="form-h-it" name="email" value="<?php echo $item->email;?>" class="uk-width-1-2">
                    </div>
                </div>
            	<input type="hidden" name="id" value="<?php echo $item->id;?>" />
            </form>

		</div>
	</div>
</div>
