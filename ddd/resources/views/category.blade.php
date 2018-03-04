@extends('master')

@include('component.loading')

@section('title', '产品类别')

@section('content')
<div class="weui_cells_title">请选择产品类别</div>
<div class="weui_cells weui_cells_split">
	<div class="weui_cell weui_cell_select">
		<div class="weui_cell_bd weui_cell_primary">
			<select class="weui_select" name="category">
				<?php foreach($categorys as $category) {?>
					<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
				<?php  } ?>
			</select>
		</div>
	</div>
</div>

<div class="weui_cells weui_cells_access">
	<a class="weui_cell" href="">
		<div class="weui_cell_bd weui_cell_primary">
			<p>cell standard</p>
		</div>
		<div class="weui_cell_ft"></div>
	</a>
	<a class="weui_cell" href="">
		<div class="weui_cell_bd weui_cell_primary">
			<p>cell standard</p>
		</div>
		<div class="weui_cell_ft"></div>
	</a>
</div>
@endsection

@section('my-js')
<script type="text/javascript">
	_getCategory();
	$('.weui_select').change(function(event){
		_getCategory();
	});
	
	function _getCategory() {
		var parent_id = $('.weui_select option:selected').val();
		$.ajax({
		  type: "GET",
		  url: '/service/category/parent_id/'+parent_id,
		  dataType: 'json',
		  cache: false,
		  success: function(data) {
		  	console.log("获取类别数据：");
		  	console.log(data);
		    if(data == null) {
		      $('.bk_toptips').show();
		      $('.bk_toptips span').html('服务端错误');
		      setTimeout(function() {$('.bk_toptips').hide();}, 2000);
		      return;
		    }
		    if(data.status != 0) {
		      $('.bk_toptips').show();
		      $('.bk_toptips span').html(data.message);
		      setTimeout(function() {$('.bk_toptips').hide();}, 2000);
		      return;
		    }

		    $('.weui_cells_access').html('');
		    for(var i=0; i<data.categorys.length; i++){
		    	var next = '/product/category_id/' + data.categorys[i].id;
		    	var node = '<a class="weui_cell" href="'+next+'">'+
							'<div class="weui_cell_bd weui_cell_primary">'+
								'<p>'+data.categorys[i].name+'</p>'+
							'</div>'+
							'<div class="weui_cell_ft">说明文字</div>'+
							'</a>';
				$('.weui_cells_access').append(node);
		    }
		  },
		  error: function(xhr, status, error) {
		    console.log(xhr);
		    console.log(status);
		    console.log(error);
		  }
		});
	}
</script>
@endsection