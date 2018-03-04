<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Laravel首页</h1>
	<table>
		<tr>
			<td>biaoti</td>
			<td>neirong</td>
			<td>caozuo</td>
		</tr>
		<?php foreach($msgs as $m) { ?>
		<tr>
			<td><?php echo $m->title;?> </td>
			<td><?php echo $m->content;?></td>
			<td>
				<a href="/msg/del/<?php echo $m->id;?>"> 删除 </a>
				|
				<a href="/msg/up/<?php echo $m->id;?>"> 修改 </a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>