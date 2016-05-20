<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
        <?php wp_title('|',true,'right');?>
        <?php bloginfo('name'); ?> - <?php echo get_bloginfo('description');?>
    </title>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body <?php body_class('index'); ?> id="page-top" >
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top"><?php echo get_bloginfo('name'); ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse  navbar-right',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            ));
            ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">


                <div class="intro-text">
                    <em class="fa fa-gears fa-5x" aria-hidden="true"></em>
                    <span class="name"><?php echo get_bloginfo('name');?></span>
                    <hr class="star-light">
                    <span class="skills"><?php echo get_bloginfo('description'); ?></span>
                    <div class="clearfix"></div>
                    <p>Skills:

                        <?php $args_styles = array(
                            //'posts_per_page' => 2,
                            'post_type' => 'ccp_skills',
                        );
                        
                        $my_skills = new WP_Query($args_styles);

                        while($my_skills->have_posts()): $my_skills->the_post();?>

                            <a href="#" data-toggle="modal" data-target="#<?php  echo( basename(get_permalink()) ); ?>" class="btn btn-default"><?php the_title(); ?></a>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>


                </div>
            </div>
        </div>
    </div>
</header>



