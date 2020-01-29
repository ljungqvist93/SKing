<section id="topper">
    <div id="bg">
        <header>
            <h1>CYBERLAD</h1>
            <p>Alright, alright, alright, you gonna learn today!</p>
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