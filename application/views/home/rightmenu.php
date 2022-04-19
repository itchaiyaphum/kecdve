<?php 
if($this->tank_auth->is_logged_in()){ 
    $profileData = $this->profile_lib->getData();
?>
<div>สวัสดี <?php echo $profileData->firstname;?> <?php echo $profileData->lastname;?></div>
<a href="<?php echo base_url('profile/activity');?>"><i></i> เข้าหน้าโปรไฟล์ของคุณ</a>
<a href="<?php echo base_url('auth/logout');?>"><i></i> ออกจากระบบ</a>
<?php
}else{
?>
<div class="btn-both">
    <a class='btn-login' href="<?php echo base_url('auth/login');?>"><i></i>เข้าสู่ระบบ</a>
    <a class='btn-register'  href="<?php echo base_url('auth/register');?>"><i></i> ยังไม่มีบัญชี?</a>   
</div>
<?php } ?>