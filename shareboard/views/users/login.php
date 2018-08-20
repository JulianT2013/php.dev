<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 16/08/2018
 * Time: 10:59 AM
 */
?>

<div class="card" xmlns="http://www.w3.org/1999/html">
<div class="card-header">
	Register User
</div>
<div class="card-body">
	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
			<label class="card-title">Email</label>
			<input type="text" name="email" class="form-control" />
		</div>
		<div class="form-group">
			<label class="card-title">Password</label>
			<input type="password" name="password" class="form-control" />
		</div>
		<input class="btn btn-primary" name="submit" type="submit" value="Submit">
	</form>
</div>
</div>
