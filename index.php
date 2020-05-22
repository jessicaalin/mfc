<?php

get_header();

// if we have posts
if (have_posts()) :
  // do something with each post
  while (have_posts()) : the_post(); ?> 
    <!-- this is the something to do -->
    <article class="post">
      <div class="post-card-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </h2>
        <p class="post-info"><?php the_time('F jS, Y g:i a'); ?> </p>
        <p>
          <?php echo get_the_excerpt() ?>
          <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
        </p>
      </div>
    </article>
  <?php endwhile; // finito
  // if we don't have posts
  else :
    // do this 
    echo '<p>No content found</p>';
  endif;

get_footer()

?>