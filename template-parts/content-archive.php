<article <?php post_class(); ?>>
    <?php echo get_post_format(); ?>
    <a class="permalink" href="<?php the_permalink(); ?>"><h2 id="permalink-h2"><?php the_title(); ?></h2></a> 
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275) ); ?></a>
    <div class="meta-info">
        <p>Published in <?php echo get_the_date(); ?> by 
            <?php the_author_posts_link(); ?>
        </p>
        <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    </div>
    <?php the_excerpt(); ?>
</article>