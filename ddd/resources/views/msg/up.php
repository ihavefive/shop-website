<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>laravel msg</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		标题<input type="text" name="title" value="<?php echo $msg->title;?>">
		内容<textarea name="content" id="" cols="30" rows="10"><?php echo $msg->content;?></textarea>
		<input type="file" name="photo" value="">
		<input type="submit" value=" 修改 ">
	</form>
</body>
</html>