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
    $whiteBG = $db->query(
        "SELECT * FROM bg WHERE theme = 1 ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);
    $blackBG = $db->query(
        "SELECT * FROM bg WHERE theme = 0 ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);

    $fonts = $db->query(
        "SELECT * FROM topfonts ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);

    $quotes = $db->query(
        "SELECT * FROM quotes ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);

    $url = 'https://www.cyberlad.com/post.php?slug=' . $slug;
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'assets/parts/head.php'; ?>
        <title>Cyberlad - <?= $post['title']; ?></title>
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?= $post['title']; ?>" />
        <meta property="og:image" content="<?= $post['thumbImage']; ?>" />
        <meta property="og:url" content="https://www.danielljungqvist.se/post.php?slug=<?= $post['slug']; ?>" />
        <meta name="author" content="danielljungqvist.se" />

        <meta name="twitter:title" content="<?= $post['title']; ?>" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:site" content="@danielljungqvist" />
        <meta name="twitter:creator" content="@ljungqvist93" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="<?= $post['thumbImage']; ?>">
    </head>
	<body id="postPage">
		<?php if ($size == 1): ?>
			<?php include 'assets/parts/large.php'; ?>
		<?php elseif ($size == 2): ?>
			<?php include 'assets/parts/small.php'; ?>
		<?php elseif ($size == 3): ?>
			<?php include 'assets/parts/twosides.php'; ?>
		<?php endif; ?>
        <div id="share">
            <div class="wrapper">
                <ul class="inline overflow">
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.cyberlad.com/post.php?slug%3D<?= $post['slug']; ?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <i class="fab fa-twitter"></i>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.cyberlad.com/post.php?slug%3D<?= $post['slug']; ?>">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <i class="fab fa-reddit"></i>
                    </li>
                </ul>
            </div>
        </div>
	<?php include 'assets/parts/bottom.php'; ?>