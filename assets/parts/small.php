<?php include 'assets/parts/topper.php'; ?>
<div class="wrapper" id="small">
	<h1><?= $post['title']; ?></h1>
	<picture>
		<source srcset="<?= $post['thumbImage']; ?>" media="(max-width:640px)" />
		<source srcset="<?= $post['coverImage']; ?>" media="(min-width:1100px)" />
		<img src="<?= $post['thumbImage']; ?>" alt="">
	</picture>
	<section id="body">
		<?= $post['postText']; ?>
	</section>
</div>