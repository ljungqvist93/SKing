<section id="topper">
    <div id="bg" style="
        <?php if($theme === 'dark'): ?>
            <?php foreach ($blackBG as $bbg): ?>
                background-image:url('assets/<?= $bbg['name']; ?>');
            <?php endforeach; ?>
        <?php elseif($theme === 'light'): ?>
            <?php foreach ($whiteBG as $wbg): ?>
                background-image:url('assets/<?= $wbg['name']; ?>');
            <?php endforeach; ?>
        <?php endif; ?>
        ">
        <header>
            <a href="index.php" id="toStart"></a>
            <?php foreach ($fonts as $font): ?>
                <link href="https://fonts.googleapis.com/css?family=<?php echo  $font['url']; ?>&display=swap" rel="stylesheet">
                <h1 style="font-family: <?= $font['name']; ?>">CYBERLAD</h1>
            <?php endforeach; ?>
            <?php foreach ($quotes as $quote): ?>
                <p><?= $quote['quote']; ?></p>
            <?php endforeach; ?>
        </header>
    </div>
    <nav>
        <ul class="inline">
            <li><a href="articles.php">Articles</a></li>
            <li><a href="guides.php">Guides</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
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
    </nav>
</section>
<div id="mobileMenu">
    <ul>
        <li><a href="articles.php">Articles</a></li>
        <li><a href="guides.php">Guides</a></li>
        <li><a href="about.php">About me</a></li>
    </ul>
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
</div>