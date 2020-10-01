<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all">
    <title>MAKANA</title>
    <?php wp_head(); ?>
</head>
<body>

    <header>
    </header>

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
            <h2>NEW ITEM</h2>
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
        </div>





    </div>
<footer></footer>
<?php wp_footer(); ?>    
</body>
</html>