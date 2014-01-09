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
            	?>
              <img src="<?php echo $image['sizes']['front-box-four']; ?>">
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
          <?php $boxsize = get_field('box_size'); ?>
  	      <?php 
  	      if(get_field('box_size')=='small'){ echo('<div class="sm-box">'); }
          elseif(get_field('box_size')=='half'){ echo('<div class="half-box">'); }
          elseif(get_field('box_size')=='threefourths'){ echo('<div class="third-box">'); }
          else echo("<div>"); ?>
            	<?php $image = get_field('image'); ?>
              <img src="<?php echo $image['sizes']['front-box-four']; ?>">
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
          <?php $boxsize = get_field('box_size'); ?>
          <?php 
          if(get_field('box_size')=='small'){ echo('<div class="sm-box">'); }
          elseif(get_field('box_size')=='half'){ echo('<div class="half-box">'); }
          else echo("<div>"); ?>
            	<?php $image = get_field('image'); ?>
              <img src="<?php echo $image['sizes']['front-box-four']; ?>">
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
            	
            	$image = get_field('image');
            	?>
              <img src="<?php echo $image['sizes']['front-box-four']; ?>">
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
  	      </div>
        <?php endwhile; ?> 
  	  <?php endif; ?>

	  </div>
	    	  
	<?php endif; ?>
 
<?php endwhile; ?>
