<?php 
@$username = $_POST['username'];
@$password = $_POST['password'];
@$submit = $_POST['submit'];
if($submit){
	if($username == 'qinxurui' && $password == '19890927'){
		header("Location:content.php");
	}else{
		header("Location:index.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body background="">
<!-----start-main---->
<div class="main">
<div class="login-form">
<h1>Q Login</h1>
<div class="head">
<img src="head.png" alt=""/>
</div>
<form action="" method="post">
<input type="text" name="username" class="text" placeholder = "You name in pinyin" >
<input type="password" name="password" placeholder = "You birthday(8 numbers)">
<div class="submit">
<input type="submit" name="submit"  value="LOGIN" >
</div>
</form>
</div>
<!--//End-login-form-->
<!-----start-copyright---->
<div class="copy-right">
<p</p>
</div>
<!-----//end-copyright---->
</div>
<!-----//end-main---->
 
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>