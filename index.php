<?php
	include 'engine/connect.php';
	$post = 2;

    $posts = $db->query("
        SELECT * FROM posts WHERE published = 1  ORDER BY created_at DESC
    ")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'assets/parts/head.php'; ?>
	<body id="startPage">
        <div class="wrapper">
            <?php foreach ($posts as $post): ?>
                <article>
                    <a href="post.php?slug=<?= $post['slug']; ?>">
                        <h2><?= $post['title']; ?></h2>
                        <picture>
                            <source set="">
                            <source set="">
                            <img src="<?= $post['thumbImage']; ?>" alt="">
                        </picture>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    <?php include 'assets/parts/bottom.php'; ?>