<div class="wrapper" id="large">
	<picture>
		<img src="<?= $post['coverImage']; ?>" alt="">
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