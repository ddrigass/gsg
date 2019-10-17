<?php
/*
Template Name: Connect From
*/
?>
<?php get_header(); ?>

<div class="page after-header-padding">
  <div class="big-projects-list long-term container-1">
  <?php
    if( have_rows('project_items_repeater') ):
        while ( have_rows('project_items_repeater') ) : the_row();
?>

        <div class="list-item connectfrom wow slideInLeft">
          <div class="item-desc">
            <div class="item-bg" style="background-image: url('<?php the_sub_field('project_image'); ?>')">
              <span class="connect__projname"><?php the_sub_field('project_name'); ?></span>
              <div class="item-content-block">
                <?php if (get_sub_field('project_name') && get_sub_field('project_description') ): ?>
                  <div class="item-info">
                    <div class="title"><?php the_sub_field('project_name'); ?></div>
                    <div class="excerpt"><?php the_sub_field('project_description'); ?></div>
                  </div>

                <?php endif; ?>
                <a href="<?php the_sub_field('project_link'); ?>" class="view-btn"><p class="btn-content">קרא כתבה</p></a>
              </div>
            </div>
          </div>
          <div class="item-meta__connect"><span><?php the_sub_field('some_text'); ?></span></div>
      </div>
        <?php
        endwhile;
    else :
    endif;
  ?>

  </div>




</div>

<?php
get_footer();
?>
