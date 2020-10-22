<?php
get_header();?>


<header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() .'/img/c19.jpg';?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php bloginfo('name');?></h1>
                    <hr class="small">
                    <span class="subheading"><?php bloginfo('description');?></span>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php
       
        if (have_posts()) {
            
            while (have_posts()) {
                the_post(); ?>


                    <?php if(is_category( 'Featured' )) : ?>
                        <h1 class="archive-title">Featured Articles:</h1>
                    <?php  else: ?>
                        <h1 class="archive-title">Category Archive: <?php single_cat_title(); ?> </h1>
                    <?php endif; ?>
                <div class="post-preview">
                    <a href="<?php the_permalink();?>">
                        <h2 class="post-title">
                           <?php the_title();?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php 
                            
                            the_excerpt();?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by 
                      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
                      on <?php the_time();?>
                    </p>
                </div>
                <hr>
                <?php
            }
            ?>
            
            <ul class="pager">
                <li class="previous">
                    <?php previous_posts_link('&larr; Newer posts'); ?>
                </li>
                <li class="next">
                    <?php next_posts_link('Older posts &rarr;'); ?>
                </li>
            </ul>
            <?php

        } else {
             ?>
            <div class="post-preview">
                <h2 class="post-title">Article Not Found!!!</h2>
            </div>
            <hr>
            <?php
        }
        ?>
            
        </div>
    </div>
</div>

<hr>

<?php
get_footer();?>