<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin';?>/css/admin.css" />
</head>
<body>
	<table class="table">
		<tr>
			<td colspan='2' class="th"><span class="span_people">&nbsp</span>欢迎光临HDPHP博客管理后台</td>
		</tr>
		<tr>
			<td>用户名</td>
			<td><?php echo $this->session->userdata('username');?></td>
		</tr>
		<tr>
			<td>上次登录时间</td>
			<td><?php echo $this->session->userdata('last_login_time');?></td>
		</tr>
		<tr>
			<td>登录IP</td>
			<td><?php echo $this->input->ip_address();?></td>
		</tr>
		<tr>
			<td colspan='2' class="th"><span class="span_server" style="float:left">&nbsp</span>服务器信息</td>
		</tr>

		<tr>
			<td>服务器环境</td>
			<td><?php echo $this->input->server('SERVER_SOFTWARE');?></td>
		</tr>
		<tr>
			<td>PHP版本</td>
			<td><?php echo PHP_VERSION;?></td>
		</tr>
		<tr>
			<td>服务器IP</td>
			<td><?php echo $this->input->server('SERVER_ADDR');?></td>
		</tr>
		<tr>
			<td>数据库信息</td>
			<td><?php echo mysql_get_server_info();?></td>
		</tr>

</table>
</body>
</html>