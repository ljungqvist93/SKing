<?php include 'topper.php'; ?>
<div class="wrapper" id="small">
	<header id="smallHead">
		<h1><?= $post['title']; ?></h1>
		<div id="timeTagsSection">
			<div id="tags">
		    	<?php $tags = get_post_tags($post['id'], $db); ?>
		        <ul class="inline">
		            <?php foreach($tags as $tag): ?>
		                <li><a href="tag.php?id=<?= $tag['id'] ?>"><?= $tag['label']; ?></a></li>
		            <?php endforeach; ?>
		        </ul>
			</div>
			<div id="timeSection">
				<div id="time">
					<?= human_readable_time_diff($post['created_at']); ?>
				</div> •
				<div id="section">
				    <?php if ($post['section'] == 0): ?>
				        Article
				    <?php else: ?>
				        Guide
				    <?php endif; ?>
			    </div>
			</div>
		</div>
	</header>
	<picture>
		<source srcset="<?= $post['thumbImage']; ?>" media="(max-width:640px)" />
		<source srcset="<?= $post['coverImage']; ?>" media="(min-width:1100px)" />
		<img src="<?= $post['thumbImage']; ?>" alt="">
	</picture>
	<section id="body">
		<?= $post['postText']; ?>
	</section>
</div>