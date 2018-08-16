<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 16/08/2018
 * Time: 10:40 AM
 */

?>

<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?= ROOT_URL ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= ROOT_URL ?>assets/css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Shareboard</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
	        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?= ROOT_URL ?>">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= ROOT_URL ?>shares">Shares</a>
			</li>

			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?= ROOT_URL ?>users/login">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= ROOT_URL ?>users/register">Register</a>
				</li>
			</ul>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>

<main role="main" class="container">

	<div class="row">
		<?php require( $view ); ?>
	</div>

</main><!-- /.container -->
</body>
</html>

