<?php
require "header.php";
?>

<body class="text-center">

	<div class="container">

		<main class="form-login w-100 m-auto">
			<form action="">
				<img class="mb-4" src="img/user.png" alt="" width="75" height="75">

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