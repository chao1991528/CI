<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Insert title here</title>
	<link href="<?php echo base_url().'assets/index';?>/css/category.css" rel="stylesheet" />
	<link href="<?php echo base_url().'assets/index';?>/css/common.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url().'assets/index';?>/js/index.js"></script>
	</head>
	<body>
		<div id="top">
		    	<div class='pos'>
		        		<div class='user'>
		            			<a href="">登录</a>
		            			<a href="">注册</a>
		        		</div>
		    	</div>  
		</div>
		<?php $this->load->view('index/head');?>

		<div id="main">
			<?php  foreach ($articles as  $v) : ?>
			<div class='news'>
				<div class='newsList'>
					<div class='newsImage'>
						<a href=""><img src="<?php echo base_url().'uploads/' . $v['thumb'];?>"/></a>
					</div>
					<div class='newsContent'>
						<h3><a href="">一时心血来潮报了个口译班</a></h3>
						<p>一时心血来潮报了个口译班，其中有一位老师大概30岁，长得很漂亮，打扮也很时尚，口译功夫了得，每次都来去匆匆，中午就花5分钟的时间泡一碗面吃。后来才知道，她大学学的是历史，她的本职工作是一家公司的公关部经理，儿子已经5岁，她每天要上班、做家务、带孩子。与我们不同的是，她拥有人事部二级口译证书，每个月都有天南海北的会议翻译任务，还兼任这家口译中心的导师。</p>
						<a href="" class='more'>更多>></a>
					</div>
				</div>
			</div>
			<?php endforeach?>
			<?php $this->load->view('index/right');?>
		</div>

		<div id="footer">
			<div class='bgbar'></div>
			<div class='bottom'>
				<div class='pos'>
					<div class='copyright'>
						© Copyright 2011-2013 www.houdunwang 后盾网
					</div>
				</div>	
			</div>
		</div>
	</body>
</html>