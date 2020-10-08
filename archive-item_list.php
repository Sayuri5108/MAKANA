商品一覧ページになるところ

<div class="items">
                <?php $query = new WP_Query( ['post_type' => 'item_list' ,'posts_per_page' => 10 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <img src="<?php the_field("item_list_img") ;?>" class="item_list_img"> 
                <p><?php the_field("item_list_info") ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
                
            </div>