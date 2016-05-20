<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bootstrapme
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();?>

    <section  id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php the_title();?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-centered text-center">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>


<?php
endwhile; // End of the loop.

get_footer();?>