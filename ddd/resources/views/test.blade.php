<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach($users as $d) {?>
		<tr>
			<td><?php echo $d->id;?></td>
			<td><?php echo $d->password;?></td>
			<td>
				<a href="/msg/del/<?php echo $d->id;?>">删除</a>
				<a href="/msg/up/<?php echo $d->id;?>">编辑</a>
			</td>
		</tr>
		<?php  } ?>
</body>
</html>