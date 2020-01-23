<div class="wrapper" id="large">
	<picture>
		<source srcset="<?= $post['thumbImage']; ?>" media="(max-width:640px)">
		<source srcset="<?= $post['coverImage']; ?>" media="(min-width:641px)">
		<img src="<?= $post['thumbImage']; ?>" alt="">
	</picture>
	<header>
		<div class="holder">
			<div id="timeTagsSection" class="large">
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
				<div id="tags">
			    	<?php $tags = get_post_tags($post['id'], $db); ?>
			        <ul class="inline">
			            <?php foreach($tags as $tag): ?>
			                <li><a href="tag.php?id=<?= $tag['id'] ?>"><?= $tag['label']; ?></a></li>
			            <?php endforeach; ?>
			        </ul>
				</div>
			</div>
			<ul id="share" class="inline">
				<li><i class="fab fa-facebook"></i></li>
				<li><i class="fab fa-twitter"></i></li>
				<li><i class="fab fa-reddit"></i></li>
				<li><i class="fab fa-linkedin"></i></li>
			</ul>
		</div>
		<h1><?= $post['title']; ?></h1>
		<div id="timeTagsSection" class="mobile">
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
			<div id="tags">
		    	<?php $tags = get_post_tags($post['id'], $db); ?>
		        <ul class="inline">
		            <?php foreach($tags as $tag): ?>
		                <li><a href="tag.php?id=<?= $tag['id'] ?>"><?= $tag['label']; ?></a></li>
		            <?php endforeach; ?>
		        </ul>
			</div>
		</div>
	</header>
	<section id="body">
		<?= $post['postText']; ?>
	</section>
</div>