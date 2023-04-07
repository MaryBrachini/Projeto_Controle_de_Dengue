<?php
require "header.php";
?>
<style>
	body {
		height: 100%;
		align-items: center;
		background-image: url('img/background.gif');
		backdrop-filter: blur(10px);
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;

	}

	.row {
		margin-left: auto;
		margin-right: auto;
		background-color: white;
		border-radius: 10px;
		height: 75%;
	}

	.div-img {
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		background-image: url('img/background.gif');

	}

	.form-floating {
		padding-bottom: 5%;
	}

	form {
		padding: 5%;
	}
</style>

<body class="text-center bg-img">

	<div class="container">
		<div class="row">

			<div class="div-img col-6">
			</div>

			<div class="col-6">
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
		</div>

	</div>
