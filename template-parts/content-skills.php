<?php
/**
 * Created by PhpStorm.
 * User: andrewshields
 * Date: 17/05/2016
 * Time: ${time}
 * @package CutCopyPaste
 * @since 1.0.0
 * @author Me
 * @link http://www.cut-copy-paste.net
 * @license MIT
 */
?>
<?php $args_styles = array(
    //'posts_per_page' => 2,
    'post_type' => 'ccp_skills',
);
$my_skills = new WP_Query($args_styles);
while($my_skills->have_posts()): $my_skills->the_post();?>




    <!-- Modal -->
    <div class="portfolio-modal modal fade" id="<?php  echo( basename(get_permalink()) ); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?php the_title(); ?></h2>
                            <hr class="star-primary">
                            <?php the_content();?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <?php
endwhile;
wp_reset_postdata();
?>



