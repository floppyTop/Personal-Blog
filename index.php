<?php
wp_head();
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <header class="header">
        <div class="l-container">
            <a href="<?= bloginfo('url'); ?>"><h1 class="page_title">Matthew Schad</h1></a>
            <span class="page_sub-title">Personal Thoughts</span>
        </div>
    </header>
    <div class="l-container l-section clearfix">
        
        <?php get_sidebar(); ?>

        <?php if (have_posts()): ?>
        <div class="l-content">
            <?php while (have_posts()):
                the_post();
             ?>
            <div class="post-excerpt">
                <a href="<?= the_permalink(); ?>"><h2><?= the_title(); ?></h2></a>
                <p><?= the_excerpt(); ?></p>
            </div>
            <?php endwhile;?>
        </div>

        <?php endif;?>
    </div>
</body>
<?php wp_footer(); ?>