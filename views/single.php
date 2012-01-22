<?php
/**
 * @author Steve Grunwell <stevegrunwell@gmail.com>
 * @package WordPress
 * @subpackage WP Client Reference
 * @version 0.4
 */

setup_postdata($post);
?>

<div class="wrap columns-2">
  <h2><?php the_title(); ?></h2>

  <div id="poststuff" class="metabox-holder has-right-sidebar">

    <div id="post-body">
      <div id="post-body-content">
        <?php the_content(); ?>
      </div>
    </div>

    <?php include $this->get_template_path('sidebar.php'); ?>

    <br class="clear" />
  </div>
</div>