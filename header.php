<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <!-- Import Google Fonts -->
    <link defer
      href="https://fonts.googleapis.com/css?family=Cinzel|Lato"
      rel="stylesheet"
    />
    <!-- Import Google Icon Font -->
    <link defer
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link defer
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />


    <!-- Import materialize.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : 
     wp_title(); ?>
    </title>
    <?php wp_head(); ?>
    </head>

  <body id="home" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="blue darken-2">
        <div class="nav-wrapper pr-0">
          <!-- .sr Classes call scroll reveal on elements -->
          <a href="#" class="brand-logo hide-on-small-and-down amber-text text-darken-2 bold hoverable"
          ><?php bloginfo('name'); ?></a
          >
          <div class="right hide-on-med-and-down">
          <?php
              wp_nav_menu( array(
                  'menu' => 'Primary',
                  'theme_location'=>'Primary',
                  'menu_class' => 'hide-on-med-and-down',
                  'walker' => new wp_materialize_navwalker()
              ));
          ?>
        </div>
      </nav>
    </div>



    <!-- End Header -->

       <div class="blue darken-4">
    <!-- Family Leader -->
    <img
      src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'\img\showcase.jpg'); ?>"
      alt="Family"
      class="leader-img responsive-img z-depth-2 blue"
    />

    <!-- Hero -->
    <div class="row blue darken-4">
      <div class="container sr2">
        
          <h5
          class="mobile-header center amber-text text-darken-2 bold"
        >
        <?php bloginfo('name'); ?>
        </h5>
        <h6 class="white-text center bold">
          <?php echo get_theme_mod('showcase_heading', 'Serving the Catholic Community for Over 30 Years'); ?>
        </h6>
      </div>
    </div>

    <!-- Call now -->
    <div class="row scrollspy" id='contact'>
      <div class="col s6 offset-s3 center py-15">
        <a href='<?php echo get_theme_mod('btn_url', 'tel:+1-877-549-1212'); ?>' class="btn green darken-1 waves-effect waves-light z-depth-3 sr3">
        <?php echo get_theme_mod('showcase_cta', 'Call Now '); ?>
        <span class="blue-text text-darken-2 bold"><?php echo get_theme_mod('showcase_blue', '877-549-1212'); ?>
        </span> 
        </a>
      </div>
    </div>
</div>