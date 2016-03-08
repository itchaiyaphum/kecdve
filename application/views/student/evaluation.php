<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
			<?php $this->load->view('student/menu');?>
		</div>
		<div class="tm-main uk-width-medium-3-4 uk-margin-top uk-margin-bottom">
			<div class="uk-text-center">
				<h2>สรุปผลการเรียนประเมินการฝึกงาน/เรียนในสถานประกอบการ</h2>
				<hr>
			</div>
			<br>
			<div>
				<h2>1. สำหรับสถานประกอบการ (80%)</h2>
				<table class="uk-table uk-table-condensed">
					<tbody><tr>
						<td>รายวิชา</td>
						<td>คะแนนเต็ม</td>
						<td>คะแนนที่ได้</td>
						<td>คะแนนสุทธิ (80%)</td>
					</tr>
					
				</tbody></table>
			</div>
			
			<br>
			<div>
				<h2>2. สำหรับอาจารย์ประจำวิชา (20%)</h2>
				<table class="uk-table uk-table-condensed">
					<tbody><tr>
						<td>รายวิชา</td>
						<td>คะแนนเต็ม</td>
						<td>คะแนนที่ได้</td>
						<td>คะแนนสุทธิ (20%)</td>
					</tr>
				</tbody></table>
			</div>
			
			<br>
			<div>
				<h2>3. ผลการประเมิน</h2>
				<table class="uk-table uk-table-condensed">
					<tbody><tr>
						<td>รายวิชา</td>
						<td>คะแนนสุทธิ (80%)</td>
						<td>คะแนนสุทธิ (20%)</td>
						<td>คะแนนรวม (100%)</td>
						<td>ผลการเรียนที่ได้</td>
					</tr>
				</tbody></table>
			</div>
		</div>
	</div>
</div>
