<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style_wp.css">
  </head>
  <body>
    <!-- Menu navigation-->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cartes.php">Cartes</a></li>
        <li><a href="scenarios.php">Scenarios</a></li>
        <li><a href="map.php">Map</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="divers.php">Divers</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <?php $args = array('post_type'=>'page', 'pagename'=>'forum');
    $posts=get_posts($args);
    if(count($posts)>0) :
      $post=$posts[0];
      setup_postdata($post);?>
      <h1><?php the_title();?></h1>
      <?php the_content();?>
    <?php endif;wp_reset_postdata();?>
  </body>
</html>
