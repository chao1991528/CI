<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后盾网文章管理系统</title>
<link href="<?php echo base_url().'assets/index';?>/css/index.css" rel="stylesheet" />
<link href="<?php echo base_url().'assets/index';?>/css/common.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url().'assets/index';?>/js/index.js"></script>
</head>
<body>
	<div id="top"></div>
	<?php $this->load->view('index/head');?>
	<div id="main">
		<div class='content'>
			<div  class='list'>
				<div class='title'>
					<h2>最新文章..</h2>
				</div>
				<ul>
					<?php foreach ($putong as $v): ?>
					<li>
						<div class='post-image'>
							<span>
								<img width="" src="<?php  echo base_url() . 'uploads/'.$v['thumb'];?>" />
							</span>	
						</div>	
						<div class='post-content'>
							<h3><?php echo $v['introduce'];?></h3>
							<p><?php echo $v['content'];?></p>
						</div>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
			<div  class='list'>
				<div class='title'>
					<h2>热门文章..</h2>
				</div>
				<ul>
					<?php foreach ($hot as $v): ?>											
					<li>
						<div class='post-image'>
							<span>
								<img width="" src="<?php  echo base_url() . 'uploads/'.$v['thumb'];?>" />
							</span>	
						</div>	
						<div class='post-content'>
							<h3><?php echo $v['introduce'];?></h3>
							<p><?php echo $v['content'];?></p>
						</div>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
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