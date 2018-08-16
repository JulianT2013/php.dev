<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 16/08/2018
 * Time: 10:58 AM
 */
?>

<div class="card" xmlns="http://www.w3.org/1999/html">
	<div class="card-header">
		Share Something!
	</div>
	<div class="card-body">
		<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
			<div class="form-group">
				<label class="card-title">Share Title</label>
				<input typ="text" name="title" class="form-control" />
			</div>
			<div class="form-group">
				<label class="card-title">Body</label>
				<textarea name="body" class="form-control" /></textarea>
			</div>
			<div class="form-group">
				<label class="card-title">Link</label>
				<input type="text" name="link" class="form-control" />
			</div>
			<input class="btn btn-primary" name="submit" type="submit" value="Submit">
			<a class="btn btn-danger" href="<?= ROOT_PATH ?>shares">Cancel</a>
		</form>
	</div>
</div>
