<?php
$activity = array(
	'name'	=> 'activity',
	'id'	=> 'activity',
	'value'	=> (isset($item->activity))?$item->activity:'',
	'rows'	=> 5,
);
$problem = array(
	'name'	=> 'problem',
	'id'	=> 'problem',
	'value'	=> (isset($item->problem))?$item->problem:'',
	'rows'	=> 5,
);
$advantage = array(
	'name'	=> 'advantage',
	'id'	=> 'advantage',
	'value'	=> (isset($item->advantage))?$item->advantage:'',
	'rows'	=> 5,
);
$attributes = array('class' => 'uk-panel uk-panel-box uk-panel-box-secondary uk-form uk-form-horizontal', 'id' => 'forgotform', 'method'=>'post');
?>
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
            <?php echo form_open($this->uri->uri_string(), $attributes); ?>
        	<div class="uk-form-row">
                <label class="uk-form-label" for="form-h-it"><?php echo form_label('กิจกรรม/งานที่ปฏิบัติ', $activity['id']); ?></label>
                <div class="uk-form-controls">
                    <?php echo form_textarea($activity); ?>
                    <div>
                    	<?php echo form_error($activity['name']); ?>
                    	<?php echo isset($errors[$activity['name']])?$errors[$activity['name']]:''; ?>
                    </div>
                </div>
            </div>
        	<div class="uk-form-row">
                <label class="uk-form-label" for="form-h-it"><?php echo form_label('ปัญหาและอุปสรรค', $problem['id']); ?></label>
                <div class="uk-form-controls">
                    <?php echo form_textarea($problem); ?>
                    <div>
                    	<?php echo form_error($problem['name']); ?>
                    	<?php echo isset($errors[$problem['name']])?$errors[$problem['name']]:''; ?>
                    </div>
                </div>
            </div>
        	<div class="uk-form-row">
                <label class="uk-form-label" for="form-h-it"><?php echo form_label('ประโยชน์ที่ได้รับ', $advantage['id']); ?></label>
                <div class="uk-form-controls">
                    <?php echo form_textarea($advantage); ?>
                    <div>
                    	<?php echo form_error($advantage['name']); ?>
                    	<?php echo isset($errors[$advantage['name']])?$errors[$advantage['name']]:''; ?>
                    </div>
                </div>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="form-h-it"></label>
                <div class="uk-form-controls uk-text-left">
                    <input type="submit" value="บันทึกข้อมูล" class="uk-button uk-button-success">
                </div>
            </div>
            <input type="hidden" name="week" value="<?php echo $week;?>"/>
            <input type="hidden" name="day" value="<?php echo $day;?>"/>
            <?php echo form_close(); ?>
		</div>
	</div>
</div>
