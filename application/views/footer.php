			<div id="footer" class="footer">
				<footer style="background: #fafafa;">
                	<div class="uk-container uk-container-center uk-clearfix">
                		<div class="uk-float-left">
                			<div style="padding: 10px;">© college.ac.th 2016</div>
                		</div>
                		<div class="uk-float-right">
                			<div style="padding: 10px;">
                				<a href="{{ url('') }}">หน้าหลัก</a> | 
                				<a href="{{ url('about') }}">เกี่ยวกับเรา</a> | 
                				<a href="{{ url('contact') }}">ติดต่อเรา</a> | 
                				<a href="{{ url('help') }}">คู่มือการใช้งาน</a>
                			</div>
                		</div>
                	</div>
                </footer>
                <?php if($this->auth_lib->isLogin()){ ?>
                <div class="uk-margin-large-top uk-text-center"><a href="{{ url('admin') }}">จัดการข้อมูลหลังบ้าน</a></div>
                <?php } ?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/jquery/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/vendor/uikit/js/uikit.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/vendor/uikit/js/components/slideshow.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/tinymce/js/tinymce/tinymce.min.js'); ?>"></script>
	<script type="text/javascript">
	tinymce.init({
	    selector: "textarea.editor",
	    plugins: "textcolor image link code preview fullscreen",
	    toolbar: "forecolor image link code preview fullscreen"
	 });
	</script>
</body>
</html>