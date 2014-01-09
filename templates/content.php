<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
  <footer>
    <?php
      if (get_comments_number()==0):
      else:
    ?>

    <p class="has-comments pull-right"><a href="<?php comments_link(); ?>"><i class="glyphicon glyphicon-comment"></i> 
      <?php printf(_n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'mazeppa' ),
			number_format_i18n( get_comments_number() ),
			'<em>' . get_the_title() . '</em>' 
      );
    ?></a></p>
    <?php endif; ?>
  </footer>
</article>
