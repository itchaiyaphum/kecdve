			<div id="footer" class="footer">
				<footer style="background: #fafafa;">
                	<div class="uk-container uk-container-center uk-text-center">
            			<div style="padding: 10px;">
            				<a href="<?php echo base_url('');?>">หน้าหลัก</a> | 
            				<a href="<?php echo base_url('about');?>">เกี่ยวกับเรา</a> | 
            				<a href="<?php echo base_url('contact');?>">ติดต่อเรา</a> | 
            				<a href="<?php echo base_url('help');?>">คู่มือการใช้งาน</a>
            			</div>
                	</div>
                	<div class="uk-container uk-container-center uk-text-center uk-margin-top">
                		ระบบการนิเทศแบบออนไลน์นี้เป็นส่วนหนึ่งของการดำเนินงานวิจัย<br/>
                		ดำเนินการโดยแผนกเทคโนโลยีสารสนเทศ<br/>
                		สถาบันการอาชีวศึกษาภาคตะวันออกเฉียงเหนือ 5<br/>
                		วิทยาลัยเทคนิคชัยภูมิ
                	</div>
                	<br/><br/>
                </footer>
                <?php if($this->tank_auth->is_logged_in()){ ?>
                <!-- 
                <div class="uk-margin-large-top uk-text-center"><a href="<?php echo base_url('admin');?>">จัดการข้อมูลหลังบ้าน</a></div>
                 -->
			    <?php } ?>
			</div>
		</div>
	</div>
</body>
</html>