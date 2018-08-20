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
		<div class="card">
			<div class="card-header">
				<h3><?= $item['title'] ?></h3>
				<small><?= $item['create_date'] ?></small>
			</div>
			<div class="card-body">
				<p class="card-text"><?= $item['body'] ?></p>
				<a class="btn btn-secondary" href="<?= $item['link'] ?>" target="_blank">Go to Website</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>