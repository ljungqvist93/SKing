<?php
	include 'engine/connect.php';
	$post = 2;

    $posts = $db->query("
        SELECT * FROM posts WHERE published = 1  ORDER BY created_at DESC
    ")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<?php include 'assets/parts/fonts.php'; ?>
<html lang="en">
	<?php include 'assets/parts/head.php'; ?>
	<body id="startPage">
        <?php include 'assets/parts/topper.php'; ?>
        <ul id="cinema" class="inline">
            <li>
                <picture>
                    <source srcset="http://cyberlad.com/engine/image/eMGAZvz4bFK7B9iP1kaxy6joX.jpg" media="(max-width:660px)">
                    <source srcset="http://cyberlad.com/engine/image/g5R03ZdQoKBPvAs2LFfiuz6qp.jpg" media="(min-width:661px)">
                    <img src="http://cyberlad.com/engine/image/eMGAZvz4bFK7B9iP1kaxy6joX.jpg" alt="">
                </picture>
                <header>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                </header>
            </li>
            <li>
                <picture>
                    <source srcset="http://cyberlad.com/engine/image/UvbJCuyhRXtGHWiekLDV70IE9.jpg" media="(max-width:660px)">
                    <source srcset="http://cyberlad.com/engine/image/GhOM8TEyVvqHkUrsPQgXxYmK9.jpg" media="(min-width:661px)">
                    <img src="http://cyberlad.com/engine/image/UvbJCuyhRXtGHWiekLDV70IE9.jpg" alt="">
                </picture>
                <header>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                </header>
            </li>
            <li>
                <picture>
                    <source srcset="" media="">
                    <source srcset="" media="">
                    <img src="" alt="">
                </picture>
                <header>
                    <h3>Lorem ipsum dolor sit amet, consectetur.</h3>
                </header>
            </li>
        </ul>
        <div class="wrapper" style="display: none;">
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