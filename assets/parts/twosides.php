<div class="wrapper" id="twosides">
	<div id="pic_head">
		<picture>
			<div class="filter"></div>
			<img src="<?= $post['coverImage']; ?>" alt="">
		</picture>
		<header>
			<h1><?= $post['title']; ?></h1>
			<div id="cat">Guide</div>
			<div id="section">
				<ul class="inline">
					<li>
						#spotify
					</li>
					<li>Music</li>
				</ul>
			</div>
			<div id="time">
				January 12th, 2020 @ 03:25:33 AM
			</div>
		</header>
	</div>
	<div id="body">
		<?= $post['postText']; ?>
	</div>
</div>