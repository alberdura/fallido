<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">

  <?php do_action( 'vw_tour_lite_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_tour_lite_slider_hide_show', false) != '' || get_theme_mod( 'vw_tour_lite_resp_slider_hide_show', false) != '') { ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'vw_tour_lite_slider_speed',4000)) ?>"> 
        <?php $vw_tour_lite_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'vw_tour_lite_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $vw_tour_lite_slider_pages[] = $mod;
            }
          }
          if( !empty($vw_tour_lite_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_tour_lite_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail('full'); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if( get_theme_mod('vw_tour_lite_slider_title_hide_show',true) != ''){ ?>
                    <h1 class="wow shake" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <?php } ?>
                  <?php if( get_theme_mod('vw_tour_lite_slider_content_hide_show',true) != ''){ ?>
                    <p class="wow zoomInDown" data-wow-duration="2s"><?php $excerpt = get_the_excerpt(); echo esc_html( vw_tour_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_tour_lite_excerpt_number1','20')))); ?></p>
                  <?php } ?>
                  <?php if( get_theme_mod('vw_tour_lite_slider_button_hide_show',true) != ''){ ?>
                    <?php if( get_theme_mod('vw_tour_lite_slider_button_text','READ MORE') != ''){ ?>
                      <div class="more-btn wow shake" data-wow-duration="2s">              
                        <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_tour_lite_slider_button_text',__('READ MORE','vw-tour-lite')));?><i class="<?php echo esc_attr(get_theme_mod('vw_tour_lite_slider_button_icon','fas fa-angle-right')); ?>"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_tour_lite_slider_button_text',__('READ MORE','vw-tour-lite')));?></span></a>
                      </div>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-tour-lite' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-tour-lite' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'vw_tour_lite_after_slider' ); ?>

  <?php /*--OUR SERVICES--*/?>
  <?php if( get_theme_mod('vw_tour_lite_sec1_title') != ''){ ?>
    <section id="our-services" class="wow swing delay-1000" data-wow-duration="2s">  
      <div class="container">
        <div class="text-center">
          <?php if( get_theme_mod('vw_tour_lite_sec1_title') != ''){ ?> 
            <h2><?php echo esc_html(get_theme_mod('vw_tour_lite_sec1_title','vw-tour-lite')); ?></h2>
            <div class="images_border">
              <img src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/images/img-border.png') ); ?>" role="img" alt="Border Image">
            </div>
          <?php }?>
        </div>
        <div class="row">
          <?php $vw_tour_lite_service_page = array();
            for ( $count = 0; $count <= 2; $count++ ) {
              $mod = intval( get_theme_mod( 'vw_tour_lite_servicesettings' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $vw_tour_lite_service_page[] = $mod;
              }
            }
            if( !empty($vw_tour_lite_service_page) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $vw_tour_lite_service_page,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $count = 0;
                while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="col-lg-4 col-md-4">
                    <div class="service-main-box">
                      <div class="box-image text-center">
                        <?php the_post_thumbnail('full'); ?>
                      </div>
                      <div class="box-content text-center">
                        <h4><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h4>
                        <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_tour_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_tour_lite_excerpt_number2','15')))); ?></p>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                <?php $count++; endwhile; 
                wp_reset_postdata();?>
              <?php else : ?>
                  <div class="no-postfound"></div>
              <?php endif;
          endif;?>
        </div>
        <div class="clearfix"></div>
      </div> 
    </section>
  <?php }?>

  <?php do_action( 'vw_tour_lite_after_why_choose_us' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>  
</main>

<?php get_footer(); ?>