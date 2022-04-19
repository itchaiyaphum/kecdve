<div class='container'>
	<div class="wrapper">
		<header>			
			<div class="menu-icon">
				<i id="drop" class="fa-solid fa-bars"></i>
			</div>
			<?php $this->load->view('home/menu') ?>
			<?php $this->load->view('home/header') ?> <!-- อัพโหลดหน้าข้อความด้านบน -->
			<?php $this->load->view('home/rightmenu') ?>
			<img style="background: linear-gradient(140deg , rgba(0,0,0,.9) , rgba(0,0,0,.4)), url(https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) no-repeat ;background-position:center;
	background-size:100%;"> <!-- ใส่รูปใน style แทนนะครับ -->
		</header>
		<section>
			<h1>ประกาศวิทยาลัยการอาชีพแก้งคร้อ / kaengkhro industrial and community education college NOTIFICATIONS</h1>
			<div class="new-items">
				
				<div class="item">
					<a href="#"><i class="fa-solid fa-chevron-right"></i> ประกาศผู้ชนะการประกวดราคาจ้างก่อสร้างอาคารเรียนและปฏิบัติการ 4 ชั้นขนาด 20 ห้องปฏิบัติการ</a>
				</div>

				<div class="item">
					<a href="#"><i class="fa-solid fa-chevron-right"></i> ขอยกเลิกประกาศ วิทยาลัยการอาชีพแก้งคร้อ เรื่องการประชาพิจารณ์</a>
				</div>

				<div class="item">
					<a href="#"><i class="fa-solid fa-chevron-right"></i> ประกาศรายชื่อผู้ผ่านการสอบคัดเลือกเป็นลูกจ้างชั่วคราว ตำแหน่ง ครูพิเศษสอน</a>
				</div>

				<div class="item">
					<a href="#"><i class="fa-solid fa-chevron-right"></i> การประชาพิจารณ์(ร่าง)รายละเอียดคุณลักษณะเฉพาะครุภัณฑ์ประจำปีงบประมาณ 2565</a>
				</div>

			</div>
		</section>
	</div>	
</div>

<style>
.container{
	width:100%;min-height:100vh;
	/* border:1px solid black; */
}
.container header{
	position: relative;
	display:flex;
	width:100%;height:auto;	
	flex-flow:column;
	justify-content:flex-start;
	align-items:center;
	text-align:center;	
	/* border:2px solid brown;		 */
}
.container header .nav{
	width:100%;
	/* border:1px solid green; */
}
.container header .nav ul{
	display:flex;
	justify-content:flex-end;
	align-items:center;
	padding:10px 20px;
	/* border:2px solid black; */
}
.container header .nav ul li{
	list-style: none;
	margin:0 10px ;
}
header .nav ul li a{
	font-size:16px;
	color:#d5d5d5;
}
header .nav ul li:first-child a{	
	padding:2.5px 5px;
	color:#000;
	background:#fff;
	border-radius:5px;
}
header .nav ul li:first-child a:hover{	
	color:#000;
}
header .nav ul li a:hover{
	color:#fff;
	text-decoration:underline;
}
header .menu-icon{
	width:100%;
	font-size:25px;
	padding:10px 30px;
	text-align:right;
	color:#fff;
	display:none;
	/* border:1px solid black ; */
}
.container header img{
	width:100%;height:100%;	
	position: absolute;
	filter:blur(1.5px);
	z-index: -1;
}
.container header h1{
	margin:10% 0 0 0;
	font-weight:bold;
	color:#fff;
}
.container header h1:last-child{
	font-size:24px;
	margin:1% 0 0 0;
	color:#d5d5d5;
	border-bottom:3px solid #e5e5e5;
}
.container header .btn-both{
	display:flex;
	flex-flow:column;
	margin:5% 0;
}
.container header .btn-both .btn-login{
	color:#fff;
	font-size:24px;
	padding:15px 30px;
	transition:all 0.2s ease-in-out;
	background:transparent;	
	border-left:1px solid #fff;
	border-right:1px solid #fff;
}
.container header .btn-both .btn-login:hover{
	color:#000;
	background:#fff;
	border-radius:10px;
}
.container header .btn-both .btn-register{
	color:#e5e5e5;
	font-size:16px;
	margin:10px 0 0 0;
}
/* ทำ Section */
.container section{	
	padding:1% 2%;
	/* border:3px solid skyblue; */
}
.container section h1{
	font-size:24px;
	text-align:center;
	text-transform:uppercase;
}
.container section .new-items{		
	/* border:2px solid orange; */
}
.container section .new-items .item{
	display:flex;
	justify-content:flex-start;
	align-items:center;
	width:100%;
	padding:.5% 0% .5% 10%;
	/* border:2px solid brown; */
}
.container section .new-items .item a{
	font-weight:200;
	font-size:20px;
	color:#000;
	/* background:brown; */
}
/* ================== ทำ Responsive ================== */
@media only screen and (max-width: 1550px) {
	.container header h1 {
		padding:0 8rem;
	}
}

@media only screen and (max-width: 1200px) {
	.container header h1 {
		margin:20% 0 0 0 ;
		padding:0 20px;
	}
	.container header .nav ul{
		padding:30px 20px;
		/* border:2px solid black; */
	}
	.container section .new-items .item a{
		font-weight:200;
		font-size:16px;
	}
}

@media only screen and (max-width: 850px) {
	header .nav ul li a{
		font-size:14px;
	}
	.container header{
		width:100%;height:50vh;
	}
	.container header h1{
		font-size:22px;
		margin:10% 0 0 0 ;
	}
	.container header .btn-both{
		margin:1% 0;
	}
	.container header .btn-both .btn-login{
		font-size:18px;
		padding:10px 20px;
	}
	.container header .btn-both .btn-register{
		margin:2% 0;
		font-size:14px;
	}
	.container section h1{
		font-size:20px;	
	}
}

@media (min-width:450px) and (max-width: 650px) {
	header .nav ul li a{
		font-size:12px;
	}
	.container header{
		width:100%;min-height:50vh;
		/* border:1px solid green; */
	}
	.container header h1{
		font-size:20px;
		margin:-1% 0 0 0 ;
	}
	.container header .btn-both{
		margin:2% 0;
	}
	.container header .btn-both .btn-login{
		font-size:18px;
		padding:10px 20px;
	}
	.container header .btn-both .btn-register{
		margin:2% 0;
		font-size:14px;
	}
	.container section h1{
		font-size:18px;	
	}
	.container section .new-items .item a{
		font-weight:200;
		font-size:14px;
	}
}

@media (min-width:0px) and (max-width: 550px) {
	.container header .nav{
		display:none;		
		/* border:1px solid yellow ; */
	}
	.container header .nav ul{
		margin:-0.5% 0 ;
		padding:0;
		flex-flow:column;		
		border-radius:5px;
		/* border:1px solid red ; */
	}
	.container header .nav ul li{
		position: relative;
		width:100%;
		color:#000;
		z-index: 99;
		background:#FCFCFC;
		border-bottom:0.01rem solid black;
	}
	.container header .nav ul li a{
		color:#000;
	}
	header .nav ul li:first-child a{	
		background:transparent;
	}
	header .menu-icon{
		width:100%;
		display:block;
		background:#000;
		/* border:1px solid red ; */
	}
	.active{
		display:block !important;		
	}
	.container section .new-items .item a{
		font-weight:200;
		font-size:14px;
	}
}

@media only screen and (max-width: 450px) {
	.container header{
		width:100%;height:45vh;
	}
	.container header h1{
		margin:-1% 0px;
		font-size:18px;
	}
	.container header h1:last-child{
		font-size: 16px;
		margin:-10px;
	}
	.container header .btn-both{
		margin:5% 0;
	}
	.container header .btn-both .btn-login{
		font-size:12px;
		padding:5px 10px;
	}
	.container header .btn-both .btn-register{
		margin:2% 0;
		font-size:10px;
	}
}

@media only screen and (max-width: 400px) {
	.container header{
		width:100%;height:35vh;
	}
	.container header h1{
		font-size:16px;
	}
	.container header h1:last-child{
		font-size: 14px;
	}
	.container header .btn-both{
		margin:5% 0;
	}
	.container header .btn-both .btn-login{
		font-size:12px;
		padding:5px 10px;
	}
	.container header .btn-both .btn-register{
		margin:2% 0;
		font-size:10px;
	}
	header .menu-icon{
		font-size:15px;
		padding:5px 30px;
	}
	.container header .nav ul li a{
		font-size:12px;
	}
	header .nav ul li:first-child a{	
		background:transparent;
	}
	.container section h1{
		font-size:16px;	
	}
	.container section .new-items .item a{
		font-weight:200;
		font-size:12px;
	}
}

@media only screen and (max-width: 300px) {
	.container header{
		width:100%;height:30vh;
	}
	.container header h1 {
		font-size:8px;
	}
	.container header h1:last-child{
		font-size:6px;
		margin:-20% 0 0 0;
	}
	.container header .btn-both{
		margin:-2% 0;
	}
	.container header .btn-both .btn-login{
		font-size:6px;
		padding:0px 4px;
	}
	.container header .btn-both .btn-register{
		margin:2% 0;
		font-size:4px;
	}
	.container section .new-items .item a{
		font-weight:200;
		font-size:12px;
	}
}

</style>

<script>
	let btn_drop = document.getElementById('drop')

	btn_drop.addEventListener('click' , () =>{
		document.getElementById('menubar').classList.toggle('active')
	})

</script>

