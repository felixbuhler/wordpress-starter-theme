<!-- Header -->
<?php get_header(); ?>

<!-- Content -->
<main>

    <!-- Start the ∞ -->
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            
            
            <!-- Post Content -->
            <?php the_content(); ?>
            
            
            <?php
        endwhile;
    endif; ?>

</main>

<!-- Footer -->
<?php get_footer(); ?>