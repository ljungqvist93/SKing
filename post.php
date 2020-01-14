<?php
	include 'engine/connect.php';

	if (!empty($_GET['slug'])) {
        $slug = $_GET['slug'];

        $post = $db->prepare("
            SELECT *
            FROM posts
            WHERE slug = :slug
            LIMIT 1
        ");
        $post->execute(['slug' => $slug]);
        $post = $post->fetch(PDO::FETCH_ASSOC);

        $id = $post['id'];

        $covers = $db->query("
            SELECT postimages.*
            FROM posts
            JOIN postimages
                ON posts.id = postimages.postId
            WHERE posts.id = $id AND cover = 1
        ")->fetchAll(PDO::FETCH_ASSOC);

        $count = $db->prepare("
            UPDATE posts SET views = views +1 WHERE id = $id
        ");
        $count->execute();
    } else {
        echo 'nope';
    }

    $size = $post['size'];
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'assets/parts/head.php'; ?>
	<body id="postPage">
		<?php if ($size == 1): ?>
			<?php include 'assets/parts/large.php'; ?>
		<?php elseif ($size == 2): ?>
			<?php include 'assets/parts/small.php'; ?>
		<?php elseif ($size == 3): ?>
			<?php include 'assets/parts/twosides.php'; ?>
		<?php endif; ?>
	<?php include 'assets/parts/bottom.php'; ?>