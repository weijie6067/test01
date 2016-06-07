<!-- 奇偶数判断 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>奇偶数判断</title>
</head>
<body>
	<?php 
		if(isset($_POST["num"])){//post 里面的内容连接input的name
			$num=$_POST["num"];
			echo "$num";
			if(is_numeric($num)){
				$num+=0;
				if(is_int($num)){
					if($num%2==0){
						echo "是偶数";
					}else{
						echo "是奇数";
					}
				}else{
					echo "不是整数";
				}				
			}else{
				echo "不是数字";
			}	
		}		
	 ?>
	<form method="post" action="">
		<input type="text" id="num" name="num">
		<input type="submit" name="button">
	</form>
</body>
</html>