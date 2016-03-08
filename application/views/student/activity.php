<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
			<?php $this->load->view('student/menu');?>
		</div>
		<div class="tm-main uk-width-medium-3-4 uk-margin-top uk-margin-bottom">
			<div class="uk-clearfix">
				<div class="uk-float-left">
					<h2>บันทึกประจำวัน</h2>
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
						<td class="uk-width-3-10">กิจกรรม/งานที่ปฏิบัติ</td>
						<td class="uk-width-2-10">ปัญหาและอุปสรรค</td>
						<td class="uk-width-2-10">ประโยชน์ที่ได้รับ</td>
						<td class="uk-width-1-10" colspan="2"></td>
					</tr>
					<?php 
            		for($j=0; $j<count($days_of_weeks); $j++){
            		    
            		    $text_activity = '-';
            		    $text_problem = '-';
            		    $text_advantage = '-';
            		    for($k=0; $k<count($items); $k++){
            		        $item = $items[$k];
            		        if($item->week==($i+1) && $item->day==($j+1)){
            		            $text_activity = $item->activity;
            		            $text_problem = $item->problem;
            		            $text_advantage = $item->advantage;
            		        }
            		    }
            		?>
					<tr>
						<td></td>
						<td><?php echo $days_of_weeks[$j];?></td>
						<td><?php echo $text_activity;?></td>
						<td><?php echo $text_problem;?></td>
						<td><?php echo $text_advantage;?></td>
						<td><a href="<?php echo base_url('profile/activity/form/?week='.($i+1).'&day='.($j+1)); ?>" class="uk-button uk-button-small uk-button-success"><i class="uk-icon-pencil"></i> บันทึก</a></td>
					</tr>
					<?php } ?>
					</tbody>
				</table>
			</article>
			<?php } ?>
			
			<article class="uk-article">
				<table class="uk-table uk-table-hover">
					<tbody><tr>
						<td class="uk-width-1-10">สัปดาห์ที่ 19</td>
						<td class="uk-width-1-10">วัน</td>
						<td class="uk-width-3-10">กิจกรรม/งานที่ปฏิบัติ</td>
						<td class="uk-width-2-10">ปัญหาและอุปสรรค</td>
						<td class="uk-width-2-10">ประโยชน์ที่ได้รับ</td>
						<td class="uk-width-1-10" colspan="2"></td>
					</tr>
					<tr>
						<td></td>
						<td>จันทร์</td>
						<td>
							<div>ซ่อมเครื่องคอมที่บ้านลูกค้า จ.นครปฐม</div>
							
						</td>
						<td>-</td>
						<td>-</td>
						<td><a href="<?php echo base_url('index.php?option=com_internship&view=notes&layout=form&id='); ?>" class="uk-button uk-button-small uk-button-success"><i class="uk-icon-pencil"></i> บันทึก</a></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td colspan="3">
							<div>
								<img class="uk-thumbnail" src="/assets/imgs/slideshow1.jpg"/>
							</div>
							<ul class="uk-list uk-list-line">
								<li><a target="_blank" href="/media/com_internship/downloads/doc1.zip"><i class="uk-icon-cloud-download"></i> ดาวน์โหลด: รายงานผลการทำงาน</a></li>
								<li><a target="_blank" href="/media/com_internship/downloads/doc1.pdf"><i class="uk-icon-cloud-download"></i> ดาวน์โหลด: แผนที่งานซ่อม</a></li>
							</ul>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>อังคาร</td>
						<td>
							<div>เดินสาย LAN จ.นครปฐม</div>
						</td>
						<td>-</td>
						<td>-</td>
						<td><a href="<?php echo base_url('index.php?option=com_internship&view=notes&layout=form&id='); ?>" class="uk-button uk-button-small uk-button-success"><i class="uk-icon-pencil"></i> บันทึก</a></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td colspan="3">
							<div class="uk-grid uk-grid-small">
								<div class="uk-width-1-3">
									<img class="uk-thumbnail" src="/assets/imgs/slideshow1.jpg"/>
								</div>
								<div class="uk-width-1-3">
									<img class="uk-thumbnail" src="/assets/imgs/slideshow1.jpg"/>
								</div>
								<div class="uk-width-1-3">
									<img class="uk-thumbnail" src="/assets/imgs/slideshow1.jpg"/>
								</div>
							</div>
							<ul class="uk-list uk-list-line">
								<li><a target="_blank" href="/media/com_internship/downloads/doc1.zip"><i class="uk-icon-cloud-download"></i> ดาวน์โหลด: รายงานผลการทำงาน</a></li>
							</ul>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>พุธ</td>
						<td>เดินสาย LAN จ.นครปฐม</td>
						<td>-</td>
						<td>-</td>
						<td><a href="<?php echo base_url('index.php?option=com_internship&view=notes&layout=form&id='); ?>" class="uk-button uk-button-small uk-button-success"><i class="uk-icon-pencil"></i> บันทึก</a></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td colspan="3">
							<div class="uk-grid uk-grid-small">
								<div class="uk-width-1-2">
									<img class="uk-thumbnail" src="/assets/imgs/slideshow1.jpg"/>
								</div>
								<div class="uk-width-1-2">
									<img class="uk-thumbnail" src="/assets/imgs/slideshow1.jpg"/>
								</div>
							</div>
							<ul class="uk-list uk-list-line">
								<li><a target="_blank" href="/media/com_internship/downloads/doc1.zip"><i class="uk-icon-cloud-download"></i> ดาวน์โหลด: รายงานผลการทำงาน</a></li>
								<li><a target="_blank" href="/media/com_internship/downloads/doc1.pdf"><i class="uk-icon-cloud-download"></i> ดาวน์โหลด: แผนที่งานซ่อม</a></li>
							</ul>
						</td>
						<td></td>
					</tr>
					</tbody>
				</table>
			</article>
		</div>
	</div>
</div>
