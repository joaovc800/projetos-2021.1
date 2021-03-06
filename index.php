<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="shortcut icon" href="wit.png"/>
	<meta name="description" content="Wit Solutions empresa de web segurança, sua empresa está segura?">
	<meta property="og:image" content="wit.png">
	<meta property="og:description" content="Wit Solutions empresa de web segurança, sua empresa está segura?">
	<meta property="og:title" content="Wit Solutions
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: linear-gradient(-135deg,#D9880D,#FF9800,#208591,#33B6C4,#40D6E8);">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" style="border-radius:300px;" alt="IMG">
				</div>
				<form action="login.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Faça o Login
					</span>
					<div class="wrap-input100 validate-input" data-validate = "É necessário um usuário">
						<input class="input100" type="text" name="usuario" placeholder="Usuário">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "É necessário uma senha">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="criarconta.php">
							Criar conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
		
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>
</body>
</html>
