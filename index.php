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
        <section id="topper">
            <nav id="main">
                <ul class="inline">
                    <li>Articles</li>
                    <li>Guides</li>
                    <li>About me</li>
                </ul>
            </nav>
            <div id="themeButton">
                <?php if(is_theme('light')): ?>
                    <a href="<?= build_theme_link('dark'); ?>" class="<?= is_theme('dark') ? 'themeselected' : '' ?>">
                        <i class="fal fa-toggle-off"></i>
                        Dark
                    </a>
                <?php else: ?>
                    <a href="<?= build_theme_link('light'); ?>" class="<?= is_theme('light') ? 'themeselected' : '' ?>">
                    <i class="fal fa-toggle-on"></i>
                        Dark
                    </a>
                <?php endif; ?>
            </div>
            <h1>Daniel Ljungqvist</h1>
        </section>
        <div class="wrapper">
            <?php foreach ($posts as $post): ?>
                <article>
                    <a href="post.php?slug=<?= $post['slug']; ?>">
                        <picture>
                            <source set="">
                            <source set="">
                            <img src="<?= $post['thumbImage']; ?>" alt="">
                        </picture>
                        <h2><?= $post['title']; ?></h2>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    <?php include 'assets/parts/bottom.php'; ?>