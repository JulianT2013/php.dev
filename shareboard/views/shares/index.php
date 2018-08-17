<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 16/08/2018
 * Time: 10:58 AM
 */
?>

<div>
	<?php if ( isset( $_SESSION['is_logged_in'] ) ): ?>
		<a class="btn btn-primary btn-share" href="<?= ROOT_PATH ?>shares/add">Share Something</a>
	<?php endif; ?>
	<?php foreach ( $viewmodel as $item ): ?>
		<div class="well">
			<h3><?= $item['title'] ?></h3>
			<small><?= $item['create_date'] ?></small>
			<hr />
			<p><?= $item['body'] ?></p>
			<br />
			<a class="btn btn-secondary" href="<?= $item['link'] ?>" target="_blank">Go to Website</a>
		</div>

	<?php endforeach; ?>
</div>