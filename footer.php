  <?php if ( ! is_home() && ! is_front_page() ) echo '</div><!-- .container -->'; ?>
</main><!-- .site-main -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container">
    <div class="site-info">
      <p class="pull-left">
        &copy; <?php echo date( 'Y', current_time( 'timestamp' ) ); ?>
        <span class="uppercase"><?php bloginfo( 'name' ); ?></span>
      </p>
      <p class="pull-right">
        <a class="link-admin" href="<?php echo get_admin_url(); ?>" target="_blank"><i class="fa fa-fw fa-terminal"></i></a>
      </p>
    </div><!-- .site-info -->
  </div><!-- .container -->
</footer><!-- .site-footer -->

<?php wp_footer(); ?>
</body>
</html>
