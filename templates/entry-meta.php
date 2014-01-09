<time class="published" datetime="<?php echo get_the_time('c'); ?>"><i class="glyphicon glyphicon-time"></i> <?php echo get_the_date(); ?></time>
<p class="byline author vcard"><i class="glyphicon glyphicon-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>
