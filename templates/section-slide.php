<div class="slideshow">
  <div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
      <?php 
			$post_num = 0;
            $query = new WP_Query(array( 'post_type' => 'slide'));
			while ( $query->have_posts() ) : $query->the_post();
			
			echo  '<li data-target="#myCarousel" data-slide-to="'.$post_num.'" ';
			 
			if($post_num == 0){ 
				echo 'class="active"';
			}
			echo '>';
			$post_num++;
			echo $post_num;
			echo '</li>';
			
			endwhile; ?>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
      <?php 
			$post_num = 0;
            $query = new WP_Query(array( 'post_type' => 'slide'));
			while ( $query->have_posts() ) : $query->the_post();
			$post_num++;
			// Image swaps?
			$image = get_field('slide_image');
			$alt = $image['alt'];
			$size = "homepage-slide";
			$thumb = $image['sizes'][ $size ];
			$image = wp_get_attachment_image_src( $attachment_id, $size );
            echo '<div class="item ';
			if($post_num == 1){ 
				echo 'active';
			}
			echo '"><div class="row"><div class="col-sm-8 col-xs-12"><img src="';
			echo $thumb;
			echo '" alt="';
			the_title();
			echo '" /></div><div class="col-sm-4 col-xs-12">
			<div class="carousel-content">';
			echo '<h3>';
			the_title();
			echo '</h3>';
			the_content();
			echo '<a class="btn btn-default" href="';
			if(get_field('slide_url')){ 
				the_field('slide_url');
				echo '" target="_self" ';
			}
			else if(get_field('slide_page')){ 
				the_field('slide_page');
				echo '" target="_blank" ';
			}
			echo '><i class="fa fa-arrow-right icon-white"></i>';
			the_field('slide_cta');
			echo '</a></div></div></div></div>';
			
			endwhile; ?>
    </div>
    <!-- Carousel nav --> 
    <!-- Carousel nav -->
    <div class="visible-xs"><a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a></div>
  </div>
</div>
