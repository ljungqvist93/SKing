<div class="wrapper" id="large">
	<a href="index.php" id="return">
		<i class="fal fa-chevron-circle-left"></i>
		To startpage
	</a>
    <?php if (count($covers) > 1): ?>
    <div id="caruselle">
        <?php foreach ($covers as $cover): ?>
            <div><img src="../engine/image/<?= $cover['imageName']; ?>" alt=""></div>
        <?php endforeach; ?>
    </div>
    <div id="mScale">
        <img src="<?php echo $post['thumbImage']; ?>" alt="">
    </div>
    <?php else: ?>
        <?php foreach ($covers as $cover): ?>
            <div id="singleImage"><img src="../engine/image/<?= $cover['imageName']; ?>" alt=""></div>
        <?php endforeach; ?>
    <?php endif; ?>
	<header>
		<div class="holder">
			<div id="timeTagsSection" class="large">
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
		</div>
		<h1><?= $post['title']; ?></h1>
	</header>
	<section id="body">
		<?= $post['postText']; ?>
	</section>
	<?php include 'comments.php'; ?>        
</div>