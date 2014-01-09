<?php 
 
/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/
while(has_sub_field("homepage_boxes")): ?>
	<?php if(get_row_layout() == "row_one_one_one"): // layout: Content ?>
	  <div class="homepage-box-row">

      <?php /* ONE BOX ROW */ ?>
	    <?php if( get_sub_field('box1') ): ?>
				<?php while( has_sub_field('box1') ): ?>
  	      <div class="full-box">
  	        <?php
            $post_object = get_sub_field('the_box');
             
            if( $post_object ): 
            	// override $post
            	$post = $post_object;
            	setup_postdata( $post );
            	
            	$image = get_field('image');
            	$link = "";
            	if(get_field('link') == 'linktopage') {
              	$link = get_field('page_link');
            	}elseif(get_field('link') == 'linktourl'){
              	$link = get_field('url_link');
            	}
            	?>
              <a href="<?php echo $link;?>"><img src="<?php echo $image['sizes']['front-box-four']; ?>"></a>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
  	      </div>
        <?php endwhile; ?> 
        
        
      <?php /* TWO BOX ROW */ ?>
      <?php elseif( get_sub_field('box2') ): ?>
				<?php while( has_sub_field('box2') ): ?>
				  <?php $post_object = get_sub_field('the_box2'); ?>
				  <?php if( $post_object ): 
            	$post = $post_object;
            	setup_postdata( $post ); ?>
          <?php $boxsize = get_field('box_size'); $imgsize = "";?>
  	      <?php 
  	      if(get_field('box_size')=='small'){ echo('<div class="sm-box">'); $imgsize="front-box-one";}
          elseif(get_field('box_size')=='half'){ echo('<div class="half-box">'); $imgsize="front-box-two";}
          elseif(get_field('box_size')=='threefourths'){ echo('<div class="third-box">'); $imgsize="front-box-three";}
          else echo("<div>"); 
          
          
          $link = "";
        	if(get_field('link') == 'linktopage') {
          	$link = get_field('page_link');
        	}elseif(get_field('link') == 'linktourl'){
          	$link = get_field('url_link');
        	}
        	?>
            	<?php $image = get_field('image'); ?>
              <a href="<?php echo $link;?>"><img src="<?php echo $image['sizes'][$imgsize]; ?>"></a>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
  	      </div>
        <?php endwhile; ?> 
  	  
  	  <?php /* THREE BOX ROW */ ?>
      <?php elseif( get_sub_field('box3') ): ?>
        <?php while( has_sub_field('box3') ): ?>
          <?php $post_object = get_sub_field('the_box3'); ?>
          <?php if( $post_object ): 
            	$post = $post_object;
            	setup_postdata( $post ); ?>
          <?php $boxsize = get_field('box_size'); $imgsize = "";?>
  	      <?php 
  	      if(get_field('box_size')=='small'){ echo('<div class="sm-box">'); $imgsize="front-box-one";}
          elseif(get_field('box_size')=='half'){ echo('<div class="half-box">'); $imgsize="front-box-two";}
          else echo("<div>"); 
          
          
          $link = "";
        	if(get_field('link') == 'linktopage') {
          	$link = get_field('page_link');
        	}elseif(get_field('link') == 'linktourl'){
          	$link = get_field('url_link');
        	}
        	?>
            	<?php $image = get_field('image'); ?>
              <a href="<?php echo $link;?>"><img src="<?php echo $image['sizes'][$imgsize]; ?>"></a>

              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>         
  	  <?php elseif(get_sub_field("box4")): ?>
  	    <?php while(has_sub_field('box4')): ?>
  	      <div class="sm-box">
  	        <?php
            $post_object = get_sub_field('the_box4');
            if( $post_object ): 
            	// override $post
            	$post = $post_object;
            	setup_postdata( $post );
            	
            	 $link = "";
            	if(get_field('link') == 'linktopage') {
              	$link = get_field('page_link');
            	}elseif(get_field('link') == 'linktourl'){
              	$link = get_field('url_link');
            	}
            	?>
            	<?php $image = get_field('image'); ?>
              <a href="<?php echo $link;?>"><img src="<?php echo $image['sizes'][$imgsize]; ?>"></a>

              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
  	      </div>
        <?php endwhile; ?> 
  	  <?php endif; ?>

	  </div>
	    	  
	<?php endif; ?>
 
<?php endwhile; ?>
