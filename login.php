<?php
session_start();
if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
	header("Location: inicio.php");
}

require "header.php";
?>
<style>
	body {
		align-items: center;
		background-image: url('img/background.gif');
		backdrop-filter: blur(10px);
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		height: 100vh;
		padding-top: 5%;
		position: relative;
	}

	body::before {
		content: "";
		position: absolute;
		top: 0px;
		right: 0px;
		bottom: 0px;
		left: 0px;
		background-color: rgba(100, 100, 100, 0.3);
	}

	.row {
		position: relative;
		margin-left: auto;
		margin-right: auto;
		background-color: white;
		border-radius: 15px;
		height: 75%;
	}

	.div-img {
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		background-image: url('img/background.gif');
		padding-top: 10%;
		border-radius: 15px 0px 0px 15px;
	}

	.form-floating {
		padding-bottom: 5%;
	}

	form {
		padding: 5%;
	}

	.txt {
		color: white;
		text-shadow: 2px 2px 5px black;
		font-weight: bold;
		align-items: center;

	}
</style>

<body class="text-center bg-img">

	<div class="container">
		<div class="row">

			<div class="div-img col-6">
				<h1 class="txt" style="font-size:50px;">BEM-VINDO !</h1>
				<p class="txt">Faça o login para acessar ao nosso site !</p>
			</div>

			<div class="col-6">
				<main class="form-login w-100 m-auto">

					<form method="POST" action="" class="form-signin">
						<img class="mb-4" src="img/user.png" alt="" width="100" height="100">

						<div class="form-floating">
							<input type="name" class="form-control" id="floatingInput">
							<label for="floatingInput">Usuario</label>
						</div>
						<div class="form-floating">
							<input type="password" class="form-control" id="floatingPassword">
							<label for="floatingPassword">senha</label>
						</div>

						<button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
						<p class="mt-5 mb-3 text-body-secondary">&copy; Diteiros reservado IFSP</p>
					</form>
				</main>
			</div>
		</div>

	</div>
</body>

</html>
