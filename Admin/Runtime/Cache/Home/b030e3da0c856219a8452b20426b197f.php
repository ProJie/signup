<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/Public/Admin/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/Admin/Js/index.js"></script>
<link rel="stylesheet" href="/Public/Admin/Css/public.css" />
<link rel="stylesheet" href="/Public/Admin/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>后台管理-人才列表</title>

	<style type="text/css">
		#opera a{
	    	color: orangered;
	    	font-size: 15px;
	    	padding: 5px 10px;
	    	border-radius: 5px;
	    }
	    #opera a:hover{
	    	background: coral;
	    	color: white;
	    }
	</style>

<head>
</head>
<body>
	<div id="top">
		<div>
		</div>
		<div class="menu">
			<a href="javascript:void(0)" >当前位置:人才管理</a>
			
	

		</div>
		<div class="exit">
			<a href="<?php echo U('Login/logout');?>">退出</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>首页</dt>
			<dd><a href="<?php echo U('Index/index');?>">登录信息</a></dd>
		</dl>
		<dl>
			<dt>内容管理</dt>
			<dd><a href="<?php echo U('People/index');?>">人才管理</a></dd>
			<dd><a href="<?php echo U('People/add');?>">新增人才</a></dd>
			<dd><a href="<?php echo U('Match/index');?>">比赛管理</a></dd>
			<dd><a href="<?php echo U('College/index');?>">学院管理</a></dd>
		</dl>
		<dl>
			<dt>账户管理</dt>
			<dd><a href="<?php echo U('Account/adminlist');?>">管理员账户管理</a></dd>
			<dd><a href="<?php echo U('Account/teaList');?>">教师账户管理</a></dd>
			<dd><a href="<?php echo U('Account/stuList');?>">学生账户管理</a></dd>
		</dl>
		<dl>
			<dt>任务分配</dt>
			<dd><a href="#">评分任务分配</a></dd>
		</dl>
	</div>
	<div id="right">
		
	<table border="1" style="margin: 20px 0 0 2%; width: 97%;">
		<tr>
			<th align="center">ID</th>
			<th align="center">姓名</th>
			<th align="center">照片</th>
			<th align="center">简介</th>
			<th align="center">操作</th>
		</tr>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
		    	<td align="center" width="10%"><?php echo ($vo['id']); ?></td>
		    	<td align="center" width="10%"><?php echo ($vo['teaname']); ?></td>
		    	<td align="center" width="10%"><img src="<?php echo ($vo['imgroute']); ?>" alt="<?php echo ($vo['imgroute']); ?>" width="150px" height="200px"/></td>
		    	<td width="60%"><?php echo (strip_tags($vo['content'] )); ?></td>
		    	<td align="center" width="10%" id="opera">
		    		<a href="<?php echo U('People/fix',array('id'=>$vo['id']));?>">[修改]</a> 
		    		 <a href="<?php echo U('People/runDel',array('id'=>$vo['id']));?>">[删除]</a>
		    	</td>
		    </tr><?php endforeach; endif; ?>
		<tr>
			<td colspan="5" align="center" class="page">
				<?php if($showpage == null): ?>已显示所有条目
				<?php else: ?>
				<?php echo ($showpage); endif; ?>
			</td>
		</tr>
	</table>

	</div>
	<div id="footer" style="clear: both;">
	    <p align="center">copyright &copy; 2016 <a href="http://www.xsgzs.org/" target="_blank">行思工作室</a>　版权所有</p>
	</div>
</body>
</html>