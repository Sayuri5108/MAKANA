<?php get_header(); ?>

    <div class="main">

        <div class="slide_img">
        <?php echo do_shortcode('[metaslider id="13"]'); ?>
        </div>

        <div class="info">
            <h2>INFOMATION</h2>
            <p>"MAKANA"へようこそ。
            <br>”MAKANA”とはハワイの言葉で"贈り物”という意味です。
            <br>皆さんの大切な方への贈り物に選んでいただけると嬉しいです。
            </p>
        </div>

        <div class="new_item">
            <h2><span>NEW</span> ITEM</h2>
            <?php $query = new WP_Query( ['post_type' => 'new_item' ,'posts_per_page' => 1 ]); ?>
            <?php if($query->have_posts()):?>
            <?php while($query->have_posts()): $query->the_post(); ?>
            <img src="<?php the_field("new_item_image") ;?>" class="new_item_img"> 
            <p><?php the_field("new_item") ;?></p>
            <p><?php the_field("new_item_price") ;?></p>
            <?php endwhile;?>
            <?php else:?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div class="item_list">
            <h2>ITEM LIST</h2>
            <div class="items">
                <?php $query = new WP_Query( ['post_type' => 'item_list' ,'posts_per_page' => 3 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <img src="<?php the_field("item_list_img") ;?>" class="item_list_img"> 
                <p><?php the_field("item_list_info") ;?></p>
                <p><?php the_field("item_list_price") ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
            </div>
            <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>" class="link btn" >商品をもっと見る >></a>
        </div>

        <div class="follow">
            <h2>FOLLOW ME</h2>
            <p>↓↓その他商品や各マルシェへの出店情報等載せております!!↓↓</p>
            <ul>
                <li>
                <a href="<?php echo esc_url( 'https://www.instagram.com/makana.1014/' ); ?>" rel="noopener" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/insta.png" alt="instaへのリンクです" class="insta">
                </a>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebookへのリンクです" class="facebook">
                </li>
            </ul>
        </div>





    </div>
    <?php get_footer(); ?>