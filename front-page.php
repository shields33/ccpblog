<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bootstrapme
 */

get_header(); ?>

    

    <?php
        $child_pages = new WP_Query( array(
            'post_type'      => 'page', // set the post type to page
            'posts_per_page' => 10, // number of posts (pages) to show
            'post_parent'    => 24, // enter the post ID of the parent page
            'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
            'order_by'       => 'menu_order',
            'order'          => 'ASC'
        ) );
        $counter = 1;
        if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();?>

            <?php
                if ($counter % 2 == 0){
                    $sectionid = 'success';
                    $starid = 'star-light';
                }else {
                    $sectionid = 'odd';
                    $starid = 'star-primary';
                }
                $counter++;
            ?>


            <section id="<?php echo basename(get_permalink()); ?>" class="<?php echo $sectionid; ?>">


                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2><?php the_title();?></h2>
                            <hr class="<?php echo $starid; ?>">
                        </div>
                    </div>
                    <div class="row">

                        <?php
                        $title = get_the_title();

                        if($title == 'About'):?>

                            <div class="col-md-8 col-centered text-center">
                                <?php the_content();?>
                            </div>
                            <div class="col-md-8 col-centered text-center">
                                <a class="btn btn-lg btn-outline" href="#"><i class="fa fa-download"></i>Find our more</a>

                            </div>

                        <?php elseif($title == 'Portfolio'):?>

                            <?php the_content(); ?>

                            <?php $args_portfolio = array(
                                //'posts_per_page' => 2,
                                'post_type' => 'ccp_portfolio',
                            );
                            $my_portfolio = new WP_Query($args_portfolio);
                            while($my_portfolio->have_posts()): $my_portfolio->the_post();?>

                                <div class="col-sm-4 portfolio-item">
                                    <a href="#modal-<?php echo( basename(get_permalink()) ); ?>" class="portfolio-link" data-toggle="modal">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/portfolio/cabin.png" class="img-responsive" alt="">
                                        <?php the_content(); ?>
                                    </a>
                                </div>




                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>


                        <?php elseif( $title =='Contact'):?>
                            <div class="col-md-8 col-centered text-center">
                                <?php the_content();?>
                            </div>

                        <?php endif;?>

                    </div>
                </div>
            </section>

    <?php

        endwhile; endif;

        wp_reset_postdata();
    ?>







<?php get_footer(); ?>