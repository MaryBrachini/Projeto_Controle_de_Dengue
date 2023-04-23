<nav class="navbar navbar-expand-lg navbar-dark">

	<a class="navbar-brand" href="index.php">logo</a>

	<ul class="navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="inicio.php">Inicio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Formulário</a>
		</li>
		<?php
		/* if (isset($_SESSION["usuario"]) || !empty($_SESSION["usuario"])) { */
		?>
		<li class="nav-item">
			<a class="nav-link" href="#">Gráfico</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="relatorio.php">Relátorios</a>
		</li>
		<li class="nav-item">
			<a href="sair.php" class="nav-link">Sair</a>
		</li>
	</ul>

	<?php /* } else { */ ?>
	<ul class="nav navbar-nav navbar-right">
		<li class="nav-text">
			<a class="nav-link" href="login.php">Login</a>
		</li>
	</ul>
	<?php /* } */ ?>
</nav>
