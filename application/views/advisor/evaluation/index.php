<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
			<?php echo $leftmenu;?>
		</div>
		<div class="tm-main uk-width-medium-3-4 uk-margin-top uk-margin-bottom">
			<div class="uk-text-center">
				<h2>สรุปผลการฝึกงานในสถานประกอบการ</h2>
				<h3>(สำหรับครูนิเทศการฝึกงาน)</h3>
			</div>
			<hr>
			
			<table class="uk-table uk-table-border">
				<thead>
					<tr>
						<th class="uk-text-center">ลำดับที่</th>
						<th>ชื่อนักศึกษา</th>
						<th class="uk-text-center">มา</th>
						<th class="uk-text-center">สาย</th>
						<th class="uk-text-center">ไม่มา</th>
						<th class="uk-text-center">ลา</th>
						<th class="uk-text-center">รวม</th>
						<th class="uk-text-center">การตรวจยืนยัน</th>
						<th class="uk-text-center">บันทึกการทำงาน</th>
						<th class="uk-text-center">รายการตรวจ</th>
					</tr>
				</thead>
				<?php 
				$total_student = count($student_items);
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
				
				
				for($i=0; $i<$total_student; $i++){
				    $student = $student_items[$i];
				    $week_no = $i + 1;
				    
				    $student_name = $student->firstname." ".$student->lastname;
				    
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
					<td><?php echo $student_name;?></td>
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
					<td class="uk-text-center"><?php echo $total_student;?></td>
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
