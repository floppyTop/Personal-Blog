
<?php
wp_head();
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body <?= body_class(); ?>>
    
    <?php get_header(); ?>

    <div class="l-container l-section clearfix">

        <?php 
            get_sidebar();
         ?>

        <?php if (have_posts()): ?>
        <div class="l-content">
            <?php while (have_posts()):
                the_post();
             ?>
            <div class="post">
                <a href="<?= the_permalink(); ?>"><h2 class="u-text--large"><?= the_title(); ?></h2></a>
                <?= the_content(); ?>
            </div>
            <?php endwhile;?>
            <?php posts_nav_link(); ?>
        </div>
        <?php endif;?>

    </div>
</body>
<?php wp_footer(); ?>