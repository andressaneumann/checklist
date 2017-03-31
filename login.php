<?php include("includes/header.php"); ?>
<?php require_once("includes/header.php");

// if($session->is_signed_in()){
// 	redirect("index.php");
// }
//$user = new User();

if(isset($_POST['submit'])){

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	$user_found = $user->verify_user($username, $password);
	
	if($user_found){

		$session->login($user_found);
		redirect("index.php");

	} else{

		$the_message = "Your password or username are incorrect!";

	}

} else{

	$username = "";
	$password = "";

}

?>
<link rel="stylesheet" type="text/css" href="css/login.css">
<body>

	<div class="col-md-4 col-md-offset-3">
		<form id="login" action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" >
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password">

			</div>

			<div class="form-group text-right">
				<input type="submit" name="submit" value="Submit" class="btn-default">

			</div>
		</form>
	</div>
</body>