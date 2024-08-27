<?php get_header()?>

<?php if(have_posts()) :while(have_posts()) :the_post();?>

<section class="single">
    <div class="container">
        <div class="single_wrapper">
        <?php if(has_post_thumbnail()){
        the_post_thumbnail();
        }?>

        <h1><?php the_title();?></h1>

        <ul>
            <li>Author: <?php echo get_the_author_meta('first_name');?></li>
            <li>Date: <?php echo get_the_date('M j, Y');?></li>
        </ul>

        <div class="info">
            <p>Category: <?php echo get_the_category()[0]->name?></p>
            <ul>
                <?php $Tags = get_tags();
                    if($Tags) {
                        foreach($Tags as $tag) { ?>
                        <li><?php echo $tag->name;?>,</li>
                        <?php }
                    }?>
            </ul>
        </div>
        <div class="article_body">
            <?php the_content();?>
        </div>
        </div>
    </div>
</section>

<?php endwhile;
    else:
        echo "no post";
    endif
?>



<?php get_footer()?>

