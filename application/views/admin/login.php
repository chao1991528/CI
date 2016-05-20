<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/css/login.css" />
	<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/login.js"></script>
	<title></title>
</head>
<body>
	<div id="divBox">
		<form action="" method="POST" id="login">
			<input type="text" id="userName" name="username"/>
			<input type="password" id="psd" name="password"/>
			<input type="" value="" id="verify" name="yzm"/>
			<input type="submit" id="sub" value="login" name='send'/>
			<!-- 验证码 -->
			<div class='captcha'>
				<?php //echo $captcha['image'];?>
			</div>
			<img src="<?php echo site_url('admin/login/verify');?>" id="verify_img" />
		</form>
		<div class="four_bj">
			
			<p class="f_lt"></p>
			<p class="f_rt"></p>
			<p class="f_lb"></p>
			<p class="f_rb"></p>
		</div>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('form','background');
    </script>
<![endif]-->
</body>
</html>