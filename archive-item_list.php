<?php get_header(); ?>


<div class="archive_items">
    <?php $query = new WP_Query( ['post_type' => 'item_list' ,'posts_per_page' => 10 ]); ?>
    <?php if($query->have_posts()):?>
    <?php while($query->have_posts()): $query->the_post(); ?>
    <div class="thumbnail">
        <?php the_post_thumbnail('medium'); ?>
        <p><?php the_field("item_list_info") ;?></p>
        <p><?php the_field("item_list_price") ;?></p>
    </div>
    <?php endwhile;?>
    <?php else:?>
    <?php endif;?>
    <?php wp_reset_postdata(); ?>
                
</div>

<?php get_footer(); ?>
