<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
			<?php $this->load->view('student/menu');?>
		</div>
		<div class="tm-main uk-width-medium-3-4 uk-margin-top uk-margin-bottom">
			<div class="uk-text-center">
				<h2>สรุปผลการเรียนประเมินการฝึกงาน/เรียนในสถานประกอบการ</h2>
				<h3>(สำหรับนักศึกษาฝึกงานในสถานประกอบการ)</h3>
			</div>
			<hr>
			
			<!-- 
			<br/>
			<table width="100%">
				<tr>
					<td><b>ชื่อสถานประกอบการ:</b></td>
					<td>บริษัท ทินิคอร์น จำกัด</td>
					<td><b>แผนก/งาน:</b></td>
					<td>ซอฟต์แวร์</td>
				</tr>
				<tr>
					<td><b>ชื่อสถานศึกษา:</b></td>
					<td>วิทยาลัยเทคนิคชัยภูมิ</td>
					<td><b>สาขา:</b></td>
					<td>เทคโนโลยีสารสนเทศ</td>
				</tr>
				<tr>
					<td><b>วันเริ่มต้นการฝึกงาน:</b></td>
					<td>02/05/2559 - 02/08/2559</td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<br/>
			<hr>
			 -->
			
			<table class="uk-table uk-table-border">
				<thead>
					<tr>
						<th>สัปดาห์ที่</th>
						<th>มา</th>
						<th>สาย</th>
						<th>ไม่มา</th>
						<th>ลา</th>
						<th>รวม</th>
						<th>ครูนิเทศตรวจเยี่ยม</th>
						<th>การบันทึกปฏิบัติงาน</th>
						<th>ผู้ควบคุมตรวจยืนยัน</th>
					</tr>
				</thead>
				<?php 
				$total_work = 0;
				$total_late = 0;
				$total_not_work = 0;
				$total_leave = 0;
				$total_all = 0;
				
				$total_advisor_check = 0;
				$total_student_activity = 0;
				$total_trainer_confirm = 0;
				$total_advisor_not_check = 0;
				$total_student_not_activity = 0;
				$total_trainer_not_confirm = 0;
				
				for($i=0; $i<18; $i++){
				    $week_no = $i + 1;
				    $num_work = 0;
				    $num_late = 0;
				    $num_not_work = 0;
				    $num_leave = 0;
				    $num_total = 0;
				    
				    $text_advisor_check = "ยังไม่ตรวจ";
				    $text_student_activity = "ยังไม่ส่งบันทึก";
				    $text_trainer_confirm = "ยังไม่ตรวจ";
				?>
				<tr>
					<td class="uk-text-center"><?php echo $week_no;?></td>
					<td class="uk-text-center"><?php echo $num_work;?></td>
					<td class="uk-text-center"><?php echo $num_late;?></td>
					<td class="uk-text-center"><?php echo $num_not_work;?></td>
					<td class="uk-text-center"><?php echo $num_leave;?></td>
					<td class="uk-text-center"><?php echo $num_total;?></td>
					<td class="uk-text-center"><button class="uk-button uk-button-danger"><?php echo $text_advisor_check;?></button></td>
					<td class="uk-text-center"><button class="uk-button uk-button-danger"><?php echo $text_student_activity;?></button></td>
					<td class="uk-text-center"><button class="uk-button uk-button-danger"><?php echo $text_trainer_confirm;?></button></td>
				</tr>
				<?php 
				}
				?>
				<tr>
					<td class="uk-text-right">รวม:</td>
					<td class="uk-text-center"><?php echo $total_work;?></td>
					<td class="uk-text-center"><?php echo $total_late;?></td>
					<td class="uk-text-center"><?php echo $total_not_work;?></td>
					<td class="uk-text-center"><?php echo $total_leave;?></td>
					<td class="uk-text-center"><?php echo $total_all;?></td>
					<td class="uk-text-center"><?php echo $total_advisor_check;?></td>
					<td class="uk-text-center"><?php echo $total_student_activity;?></td>
					<td class="uk-text-center"><?php echo $total_trainer_confirm;?></td>
				</tr>
			</table>
			
			<br/>
			<h2><u>สรุป</u></h2>
			<div class="uk-grid">
        		<div class="uk-width-medium-1-4">
        			<h3>สรุปเวลาปฏิบัติงาน</h3>
        			<ul class="uk-list uk-list-striped">
        				<li>มา = <?php echo $total_work;?> วัน</li>
        				<li>ไม่มา = <?php echo $total_not_work;?> วัน</li>
        				<li>สาย = <?php echo $total_late;?> วัน</li>
        				<li>ลา = <?php echo $total_leave;?> วัน</li>
        			</ul>
        		</div>
        		<div class="uk-width-medium-1-4">
        			<h3>สรุปบันทึกปฏิบัติงาน</h3>
        			<ul class="uk-list uk-list-striped">
        				<li>ส่งบันทึกแล้ว = <?php echo $total_student_activity;?> วัน</li>
        				<li>ยังไม่ส่งบันทึก = <?php echo $total_student_not_activity;?> วัน</li>
        			</ul>
        		</div>
        		<div class="uk-width-medium-1-4">
        			<h3>สรุปครูนิเทศน์ตรวจเยี่ยม</h3>
        			<ul class="uk-list uk-list-striped">
        				<li>ตรวจแล้ว = <?php echo $total_advisor_check;?> วัน</li>
        				<li>ยังไม่ตรวจ = <?php echo $total_advisor_not_check;?> วัน</li>
        			</ul>
        		</div>
        		<div class="uk-width-medium-1-4">
        			<h3>สรุปผู้ควบคุมตรวจยืนยัน</h3>
        			<ul class="uk-list uk-list-striped">
        				<li>ตรวจแล้ว = <?php echo $total_trainer_confirm;?> วัน</li>
        				<li>ยังไม่ตรวจ = <?php echo $total_trainer_not_confirm;?> วัน</li>
        			</ul>
        		</div>
        	</div>
        	
        	<h2><u>หมายเหตุ</u></h2>
        	<div>
        		<span><u>การตรวจยืนยัน</u></span>
        		บันทึกผล ทำโดยผู้ควบคุมการฝึกงาน หรือครูฝึกงานในสถานประกอบการ ให้การยืนยันในระบบออนไลน์
        	</div>
			<div>
        		<span><u>การตรวจเยี่ยม</u></span>
        		หมายถึง ครูนิเทศน์การฝึกงาน หรือ ครูที่ปรึกษา เข้าตรวจสอบในระบบออนไลน์
        	</div>
		</div>
	</div>
</div>
