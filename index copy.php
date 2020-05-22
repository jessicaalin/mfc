<?php

get_header();

// if we have posts
if (have_posts()) :
  // do something with each post
  while (have_posts()) : the_post(); ?> 
    <!-- this is the something to do -->
    <article class="post">
      <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
      </h2>
      <?php the_content() ?>
    </article>
  <?php endwhile; // finito
  // if we don't have posts
  else :
    // do this 
    echo '<p>No content found</p>';
  endif;

get_footer()

?>


<!-- notes
things that are baked into php:
get_header()
get_footer() -->