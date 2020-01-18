<section id="topper">
	<nav id="main">
		<ul class="inline">
			<li>Articles</li>
			<li>Guides</li>
			<li>About me</li>
		</ul>
	</nav>
	<h1>Daniel Ljungqvist</h1>
</section>
<div class="wrapper" id="small">
	<div id="pContent">
		<header>
			<h1><?= $post['title']; ?></h1>
		</header>
		<picture>
			<img src="<?= $post['coverImage']; ?>" alt="">
		</picture>
		<div id="tags">
			<ul class="inline">
				<li>Movies</li>
				<li>#review</li>
			</ul>
		</div>
		<div id="body">
			<?= $post['postText']; ?>
		</div>
	</div>
</div>