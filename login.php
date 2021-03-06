<!DOCTYPE html>
<html>
<head>
	<title>online desktop borrowing | Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<?php require 'header.php'; ?>
	<div class="container">
		<div class="form-group">
			<h2>Login Form</h2>
			<?php
			require_once 'db.php';
			session_start();
			if(isset($_POST['login'])){
				$username= $_POST['username'];
				$password= $_POST['password'];
				if(empty($username)){
					$errorMsg[]= "Please Fill Username";
				}elseif(empty($password)){
					$errorMsg[]= "Please fill Password";
				}else{
					try{
						$sql=$connection->prepare("SELECT * FROM admin WHERE username=:username AND password=:password");
						$sql->execute(array(':username'=>$username,':password'=>$password));
						$row= $sql->fetch(PDO:: FETCH_ASSOC);
						if($sql->rowCount() > 0){
							if($username==$row['username']){
								if($password==$row['password']){
									$_SESSION['user_login']= $row['id'];
									$loginMsg= "Successfully Login...";
									header("refresh:2; admin_index.php");
								}else{
									$errorMsg[]= "Wrong Password";
								}
								}else{
									$errorMsg[]= "Wrong Username";
							}
						}
					}catch(PDOException $e){
						$e->getMessage();
					}
				}
			}
			?>

			<?php
			if(isset($errorMsg)){
				foreach($errorMsg as $error){
		
			?>
			<div class="errorMsg form-control">
				<strong><?php echo $error;?></strong>
			</div>
			<?php
				}
			}
			if(isset($loginMsg)){

			?>
			<div class="loginMsg form-control">
				<strong><?php echo $loginMsg;?></strong>
			</div>
			<?php
			}
			?>
			<form method="POST">
				<input type="text" name="username" placeholder="Enter Your UserName" class="form-control">
				<input type="password" name="password" placeholder="Enter Your Password" class="form-control">
				<button type="submit" class="login-button form-control" name="login">Login</button>
			</form>
		</div>
	</div>

</body>
</html>
