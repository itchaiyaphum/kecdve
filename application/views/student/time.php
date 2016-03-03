<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
			<?php $this->load->view('student/menu');?>
		</div>
		<div class="tm-main uk-width-medium-3-4 uk-margin-top uk-margin-bottom">
             	<div class="uk-container">
            		<div class="uk-clearfix">
            			<div class="uk-float-left">
            				<h2>บันทึกเวลาเรียน</h2>
            			</div>
            		</div>
            		<hr>
            		<?php 
            		$days_of_weeks = array('จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์','อาทิตย์');
            		for($i=0; $i<18; $i++){
            		?>
            		<article class="uk-article">
            			<table class="uk-table">
            				<tbody><tr>
            					<td class="uk-width-1-10">สัปดาห์ที่ <?php echo ($i+1);?></td>
            					<td class="uk-width-1-10">วัน</td>
            					<td class="uk-width-2-10">เวลามา</td>
            					<td class="uk-width-2-10">เวลากลับ</td>
            					<td class="uk-width-3-10">หมายเหตุ</td>
            					<td class="uk-width-1-10" colspan="2"></td>
            				</tr>
            				<?php 
                    		for($j=0; $j<count($days_of_weeks); $j++){
                    		?>
            				<tr>
            					<td></td>
            					<td><?php echo $days_of_weeks[$j];?></td>
            					<td>
            						<select name="come_hour" style="width: 50px; float: left;">
                                		<?php 
                                		for($ii=0; $ii<24; $ii++){
                                		?>
                                		<option value="<?php echo $ii;?>"><?php echo $ii;?></option>
                                		<?php } ?>
                                	</select>
                                	<select name="come_minute" style="width: 50px; float: left; margin-left: 5px;">
                                		<?php 
                                		for($ii=0; $ii<60; $ii++){
                                		?>
                                		<option value="<?php echo $ii;?>"><?php echo $ii;?></option>
                                		<?php } ?>
                                	</select>
                                </td>
            					<td>
            						<select name="come_hour" style="width: 50px; float: left;">
                                		<?php 
                                		for($ii=0; $ii<24; $ii++){
                                		?>
                                		<option value="<?php echo $ii;?>"><?php echo $ii;?></option>
                                		<?php } ?>
                                	</select>
            						<select name="come_minute" style="width: 50px; float: left; margin-left: 5px;">
                                		<?php 
                                		for($ii=0; $ii<60; $ii++){
                                		?>
                                		<option value="<?php echo $ii;?>"><?php echo $ii;?></option>
                                		<?php } ?>
                                	</select>
            					</td>
            					<td>
            						<form class="uk-form">
                						<div class="uk-form-row">
                    						<select style="width: 100%;">
                    							<option value="0"></option>
                    							<option value="1">วันหยุดราชการ</option>
                    							<option value="2">วันหยุดสถานประกอบการ</option>
                    							<option value="3">ทำงานนอกเวลา</option>
                    							<option value="4">อื่นๆ</option>
                    						</select>
                    						<textarea style="height: 30px; width: 100%;"></textarea>
                						</div>
            						</form>
            					</td>
            					<td><a href="<?php echo base_url('profile/time'); ?>" class="uk-button uk-button-small uk-button-success"><i class="uk-icon-pencil"></i> บันทึก</a></td>
            				</tr>
            				<?php } ?>
            				</tbody>
            			</table>
            		</article>
            		<?php } ?>
            		</div>
                </div>
	</div>
</div>
