<?= include 'engine/connect.php';


    $rest = $db->prepare("
        SELECT posts.*
        FROM posts
        LEFT JOIN post_tag ON posts.id = post_tag.post_id
        WHERE section = 1 AND published = 1
        ORDER BY created_at DESC
    ");
    $rest->execute(['tag_id' => $tagId]);
    $rest = $rest->fetchAll(PDO::FETCH_ASSOC);
    $fonts = $db->query(
        "SELECT * FROM topfonts ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);

    $quotes = $db->query(
        "SELECT * FROM quotes ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);
    $whiteBG = $db->query(
        "SELECT * FROM bg WHERE theme = 1 ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);
    $blackBG = $db->query(
        "SELECT * FROM bg WHERE theme = 0 ORDER BY rand() LIMIT 1" 
    )->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'assets/parts/head.php'; ?>
    <body id="startPage">
        <?php include 'assets/parts/topper.php'; ?>
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
    </div>
</main>

<?php include 'assets/parts/bottom.php'; ?>