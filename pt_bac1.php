<!DOCTYPE html>
<html> 
	<head> 
		<title> Giải Phương Trình Bậc Nhất</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?php
			$result = '';
			if (isset($_POST['calculate']))	
			{
				$a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
				$b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
				if ($a == ''){
					$result = 'Bạn Chưa nhập số a';
				}
				else if ($b == ''){
					$result = 'Bạn chưa nhập số b';
				}
				else if($a == 0){
					$result = 'Số a phải nhập khác 0';
				}
				else{
					$result = -($b)/ $a;
				}
			}
		?>
		<h1>Giai phương trình bậc nhất</h1>
		<form method="post" action="">
			<input type="text" style="width: 20px" name="a" value=""/>x
			+
			<input type="text" style="width: 20px" name="b" value=""/> = 0
			<br/>
			<input type="submit" name="calculate" value="Tính"/>
		</form>
		<?php  echo ' x là:',$result; ?>
	</body>
</html>