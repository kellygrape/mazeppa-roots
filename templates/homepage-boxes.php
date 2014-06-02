<?php 
 
/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/

?>
<div class="homepage-box-row">
<?php
 
// check if the flexible content field has rows of data
if( have_rows('homepage_boxes') ):
 
  // loop through the rows of data
  while ( have_rows('homepage_boxes') ) : the_row();
  
    if( get_row_layout() == 'row_onebox' ):
    
      if( get_sub_field('box1') ): while( has_sub_field('box1') ): ?>
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
      <?php endwhile; endif;
    
    elseif( get_row_layout() == 'row_twobox' ): 
    
      /* TWO BOX ROW */
      if( get_sub_field('box2') ): while( has_sub_field('box2') ): ?>
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
        	$image = get_field('image'); ?>
          <a href="<?php echo $link;?>"><img src="<?php echo $image['sizes'][$imgsize]; ?>"></a>
          
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      <?php endwhile; endif;
    
    elseif( get_row_layout() == 'row_threebox' ): 
    
            /* THREE BOX ROW */
      if( get_sub_field('box3') ): while( has_sub_field('box3') ): ?>

          <?php $post_object = get_sub_field('the_box3'); ?>
          <?php if( $post_object ): 
            	$post = $post_object;
            	setup_postdata( $post ); ?>
          <?php $boxsize = get_field('box_size'); $imgsize = "";?>
  	      <?php 
  	      if(get_field('box_size')=='small'){ echo('<div class="sm-box">'); $imgsize="front-box-one";}
          elseif(get_field('box_size')=='half'){ echo('<div class="half-box">'); $imgsize="front-box-two";}
          else echo('<div>'); 
          
          $link = "";
        	if(get_field('link') == 'linktopage') {
          	$link = get_field('page_link');
        	}elseif(get_field('link') == 'linktourl'){
          	$link = get_field('url_link');
        	}
        	$image = get_field('image'); ?>
          <a href="<?php echo $link;?>"><img src="<?php echo $image['sizes'][$imgsize]; ?>"></a>

              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        <?php endwhile; endif;

    else : 
        
      

      // check if the nested repeater field has rows of data
      if( have_rows('box4') ):
        
        // loop through the rows of data
        while ( have_rows('box4') ) : the_row(); ?>
          <div class="sm-box">
          <?php $post_object = get_sub_field('the_box4');
          
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
            $image = get_field('image'); ?>
            <a href="<?php echo $link;?>"><img src="<?php echo $image['sizes']['front-box-one']; ?>"></a>

            <?php wp_reset_postdata();
          endif;?>
          </div>
        <?php endwhile;      
      endif;

    endif; //if the row layout
  
  endwhile;
 
else :
 
    // no layouts found
 
endif;
 
?>

</div>