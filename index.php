<?php
	include 'engine/connect.php';
	$post = 2;

    $cinema = $db->query("
        SELECT * FROM posts WHERE published = 1 ORDER BY created_at DESC LIMIT 3
    ")->fetchAll(PDO::FETCH_ASSOC);

    $rest = $db->query("
        SELECT * FROM posts WHERE published = 1 ORDER BY created_at DESC LIMIT 3,10
    ")->fetchAll(PDO::FETCH_ASSOC);

    $fonts = $db->query(
        "SELECT * FROM topfonts ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);

    $quotes = $db->query(
        "SELECT * FROM quotes ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);
    $bg = $db->query(
        "SELECT * FROM bg ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'assets/parts/head.php'; ?>
	<body id="startPage">
        <?php include 'assets/parts/topper.php'; ?>
        <ul id="cinema" class="inline">
            <?php foreach ($cinema as $sins): ?>
                <li>
                    <a href="post.php?slug=<?= $sins['slug']; ?>">
                        <div class="shadow"></div>
                        <picture>
                            <img src="<?= $sins['thumbImage']; ?>" alt="">
                        </picture>
                        <header>
                            <h3><?= $sins['title']; ?></h3>
                        </header>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <section id="recent">
            <?php foreach ($rest as $rests): ?>
                <article>
                    <a href="post.php?slug=<?= $rests['slug']; ?>" class="pLink"></a>
                    <img src="<?= $rests['thumbImage']; ?>" alt="">
                    <div class="tags_section">
                        <div class="tags">
                            <?php $tags = get_post_tags($rests['id'], $db); ?>
                            <ul class="tags inline">
                                <?php foreach($tags as $tag): ?>
                                    <li><a href="tag.php?id=<?= $tag['id'] ?>"><?= $tag['label']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="section">
                            <?php if ($rests['section'] == 1): ?>
                                Article
                            <?php else: ?>
                                Guide
                            <?php endif; ?>
                        </div>
                    </div>
                    <header>
                        <h3><?= $rests['title']; ?></h3>
                    </header>
                </article>
            <?php endforeach; ?>
        </section>
    <?php include 'assets/parts/bottom.php'; ?>