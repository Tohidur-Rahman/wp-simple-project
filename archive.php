<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_archive_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li> / 
                        <li><?php the_archive_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">
               <?php 
                                      
                  while ( have_posts() ) { 
                     the_post();                 
               ?> 
               <div class="col-md-4">
                  <div class="single-blog">
                     <img src="<?php the_post_thumbnail_url();?>" alt="" />
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><a href="<?php the_permalink();?>"><?php the_time('F jS, Y'); ?></a></li>
                              <li><?php the_category(' /'); ?></li>
                              <li><a href="<?php the_permalink();?>"><?php the_author(); ?></a></li>
                           </ul>
                        </div>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink();?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
               <?php } wp_reset_postdata(); ?>
               
            </div>
            <div class="row">
               <div class="col-md-12 text-center mt-5">
                  <a href="blog-single.html" class="box-btn"><?php echo esc_html__('load more', 'tohid');?> <i class="fa fa-angle-double-right"></i></a>
               </div>
            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
 <?php get_footer(); ?>