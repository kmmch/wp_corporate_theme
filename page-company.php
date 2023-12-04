<?php get_header( ); ?>
			        <div class="page-inner">
                <div class="page-main" id="pg-common">
                  <ul class="commons">
<?php
$parent_id = get_the_ID(  );
$args = array(
  'posts_per_page' => -1,
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'post_parent' => $parent_id,
);
$common_pages = new WP_Query($args);
if($common_pages->have_posts()):
  while($common_pages->have_posts()): $common_pages->the_post();
?>
                    <li class="common-item">
                      <a class="common-link" href="<?php the_permalink(  ); ?>">
                        <div class="common-image"><?php the_post_thumbnail(  ); ?></div>
                        <div class="common-body">
                          <p class="name"><?php the_title(  ); ?></p>
                          <p class="caption"><?php echo get_the_excerpt(  ); ?></p>
                          <div class="buttonBox">
                            <button type="button" class="seeDetail">MORE</button>
                          </div>
                        </div>
                      </a>
                    </li>
<?php
  endwhile;
  wp_reset_postdata(  );
endif;
?>
                  </ul>
                </div>
              </div>
<?php get_footer( ); ?>