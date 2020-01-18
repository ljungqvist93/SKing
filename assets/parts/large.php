<div class="wrapper" id="large">
	<picture>
		<source srcset="<?= $post['thumbImage']; ?>" media="(max-width:640px)">
		<source srcset="<?= $post['coverImage']; ?>" media="(min-width:641px)">
		<img src="<?= $post['thumbImage']; ?>" alt="">
	</picture>
	<header>
		<h1><?= $post['title']; ?></h1>
		<ul id="share" class="inline">
			<li><i class="fab fa-facebook"></i></li>
			<li><i class="fab fa-twitter"></i></li>
			<li><i class="fab fa-reddit"></i></li>
			<li><i class="fab fa-linkedin"></i></li>
		</ul>
	</header>
	<section id="body">
		<?= $post['postText']; ?>
	</section>
</div>