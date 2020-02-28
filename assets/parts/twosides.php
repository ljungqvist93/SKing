<div class="wrapper" id="twosides">
	<a href="index.php" id="return">
		<i class="fal fa-chevron-circle-left"></i>
		To startpage
	</a>
	<div id="pic_head">
		<picture>
			<div class="filter"></div>
			<source srcset="<?= $post['thumbImage']; ?>" media="(max-width:799px)">
			<source srcset="<?= $post['coverImage']; ?>" media="(min-width:800px">
			<img src="<?= $post['thumbImage']; ?>" alt="">
		</picture>
		<section id="head_content">
			<header>
				<div id="mTime">
					<?= human_readable_time_diff($post['created_at']); ?>
				</div>
				<h1><?= $post['title']; ?></h1>
				<div id="cat">Guide</div>
				<div id="section">
                	<?php $tags = get_post_tags($post['id'], $db); ?>
	                <ul class="inline">
	                    <?php foreach($tags as $tag): ?>
	                        <li><a href="tag.php?id=<?= $tag['id'] ?>"><?= $tag['label']; ?></a></li>
	                    <?php endforeach; ?>
	                </ul>
				</div>
			</header>
		</section>
	</div>
	<div id="body">
		<?= $post['postText']; ?>
	</div>
	<?php include 'comments.php'; ?>                            
</div>