<?php
$profile = $this->profile_lib->getData();

$firstname = array(
	'name'	=> 'firstname',
	'id'	=> 'firstname',
    'value'	=> $profile->firstname,
	'size'	=> 30,
);
$lastname = array(
	'name'	=> 'lastname',
	'id'	=> 'lastname',
    'value'	=> $profile->lastname,
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> $profile->email,
	'size'	=> 30,
);
$attributes = array('class' => 'uk-form uk-form-horizontal', 'id' => 'loginform', 'method'=>'post');
?>
<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
			<?php $this->load->view('settings/menu');?>
		</div>
		<div class="tm-main uk-width-medium-3-4 uk-margin-top uk-margin-bottom">
            <div class="uk-height-1-1 uk-margin-large-bottom">
                <?php echo form_open($this->uri->uri_string(), $attributes); ?>
                <?php if(isset($messages)){ ?>
                <div class="uk-alert uk-alert-success"><?php echo $messages;?></div>
                <?php } ?>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-right" for="form-h-it"><?php echo form_label("Firstname:", $firstname['id']); ?></label>
                    <div class="uk-form-controls">
                        <?php echo form_input($firstname); ?>
                        <div>
                        <?php echo form_error($firstname['name']); ?>
                        <?php echo isset($errors[$firstname['name']])?$errors[$firstname['name']]:''; ?>
                        </div>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-right" for="form-h-it"><?php echo form_label("Lastname:", $lastname['id']); ?></label>
                    <div class="uk-form-controls">
                        <?php echo form_input($lastname); ?>
                        <div>
                        <?php echo form_error($lastname['name']); ?>
                        <?php echo isset($errors[$lastname['name']])?$errors[$lastname['name']]:''; ?>
                        </div>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-right" for="form-h-it"><?php echo form_label("Email:", $email['id']); ?></label>
                    <div class="uk-form-controls">
                        <?php echo form_input($email); ?>
                        <div>
                        <?php echo form_error($email['name']); ?>
                        <?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
                        </div>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-it"></label>
                    <div class="uk-form-controls uk-text-left">
                        <input type="submit" value="บันทึกข้อมูล" class="uk-button uk-button-success">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
		</div>
	</div>
</div>
