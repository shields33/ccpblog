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
<?php $args_portfolio = array(
    //'posts_per_page' => 2,
    'post_type' => 'ccp_portfolio',
);
$my_portfolio = new WP_Query($args_portfolio);
while($my_portfolio->have_posts()): $my_portfolio->the_post();?>




    <div class="portfolio-modal modal fade" id="modal-<?php echo( basename(get_permalink()) ); ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2><?php the_title();?></h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
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



