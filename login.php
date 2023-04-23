<?php
session_start();
if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
	header("Location: inicio.php");
}

require "header.php";
?>
<link rel="stylesheet" href="css_login.css">

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
							<input type="name" class="form-control" id="usuario" name="usuario" placeholder="Nome de usuario" required autofocus>
							<label for="floatingInput">Usuario</label>
						</div>
						<div class="form-floating">
							<input type="password" class="form-control" id="senha" name="senha" required>
							<label for="floatingPassword">senha</label>
						</div>

						<?php
						$usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);

						if ($usuario != "123") { ?>

							<div class="alert alert-danger" role="alert">
								O usuário ou a senha estão incorretos.
							</div>
						<?php } ?>

						<button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
						<p class="mt-5 mb-3 text-body-secondary">&copy; Diteiros reservado IFSP</p>
					</form>
				</main>
			</div>
		</div>

	</div>
</body>

</html>
