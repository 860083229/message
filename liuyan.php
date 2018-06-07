<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- <form action="adduser_do.php" method="post"> -->
		<table>
			<tr>
				<td>留言：</td>
				<td><textarea name="content" id="content"></textarea></td>
			</tr>
			<tr>
				<td><input type="button" value="留言" id="liu"></td>
			</tr>

		</table>
		<div id="dia"></div>

	<!-- </form> -->
</body>  
</html>
<script src="jquery-1.7.2.min.js">
</script>
<script>
	$(document).on('click','#liu',function() {
		var content=$('#content').val();
		// alert(content);
		$('#dia').append("<tr><td><a href='list.php'>留言成功,点击跳转查看</a></td></tr>");
		$.ajax({
			url:'./liuyan_do.php',
			type:'post',
            dataType:'json',
            data:{content:content},
            success:function(wawa){
            	console.log(wawa);
            	// if(wawa.success==1){
	            	// 	$.each(wawares.,function(){
	            	// 	var tr=$('<tr></tr>')
	            	// 	tr.append('<td>'+this.content+'</td>');
	            	// })
	            	// 	$('.dia').append(tr);
	            	if(wawa==1){
	            		$('#dia').append('<tr><td>2</td></tr>');
	            	}
            	


            	// }
            	
            }
		})
	})
</script>