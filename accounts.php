<?php include ('../../src/php/database_connect.php'); error_reporting(0);
	// echo ("<script>alert('" . $_SESSION['email'] . "')</script>");

?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>My Account</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.0.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.0.0">
	<script src="./md5.js"></script>
    <script src="./md5,min.js"></script>
</head>

<body class="nk-body npc-crypto bg-white has-sidebar ">
	<?php
		$email = $_SESSION['email'];
		$sql = "SELECT * FROM `user` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		// echo "<script>alert('" . $user['first_name'] . "')</script>";
	?>
   
			<li><a href="./accounts.php" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
			<li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
	<script>
		let e = md5("qwer");
		alert(e)
	</script>
    
    <script src="./assets/js/bundle.js?ver=3.0.0"></script>
    <script src="./assets/js/scripts.js?ver=3.0.0"></script>
    <script src="./assets/js/charts/chart-crypto.js?ver=3.0.0"></script>
</body>

</html>