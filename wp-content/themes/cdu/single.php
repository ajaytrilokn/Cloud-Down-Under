<?php
get_header();
?>
<style>
.blog-title{
    text-align: center;
    padding: 150px 0;
}
    .blog-title h1 a {color: #000;} 

</style>

<div class="blog-title">
                           <h1> <a href="<?php the_permalink(); ?>" class="blog-title-text">
                              <?php echo get_the_title(); ?>
                            </a></h1>
                            <?php echo get_the_post_thumbnail($wp_query->ID, 'full'); ?>
                            <?php the_content() ;?>
                          </div>
                       
<?php
get_footer();
?>