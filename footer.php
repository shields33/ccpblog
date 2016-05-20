
<?php get_template_part( 'template-parts/content', 'skills' ); ?>
<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>On the web and beach</p>
                    <p>Sunshine Coast, Australia</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>

                        <li>
                            <a href="https://twitter.com/shieldsee" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="http://au.linkedin.com/in/ashields33" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/shields33?tab=repositories" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-github-alt"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About Andrew</h3>
                    <p>Freelance web developer and nerd</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>





<?php wp_footer(); ?>

</body>
</html>