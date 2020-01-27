
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
            <i class="far fa-bars"></i>
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