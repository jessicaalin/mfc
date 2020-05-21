<footer class="site-footer">
  <nav class="site-nav">
    <?php
    // defining args; 
      $args = array(
        // giving theme location the name of footer
        'theme_location' => 'footer'
      );
    ?>
    <!-- show the args/footer mnenu pages -->
    <?php wp_nav_menu( $args ); ?>
  </nav>
  <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
</footer>

</div> <!-- closing div from header -->

<?php wp_footer(); ?> 

</body>
</html>