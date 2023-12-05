<?php get_header( ); ?>
              <div class="page-inner full-width">
                <div class="page-main" id="pg-news">
                  <div class="main-container">
                    <div class="main-wrapper">
                      <div class="newsLists">
<?php
if(have_posts(  )):
  while(have_posts(  )):
    the_post(  );
    get_template_part( 'content-archive' );
  endwhile;
endif;
?>
                      </div>
                      <div class="pager">
                        <ul class="pagerList">
<?php
the_posts_pagination(
  array(
    'mid_size' => 2,
    'prev_text' => '<',
    'next_text' => '>',
  )
);
?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- #page-container -->
          </div><!-- #page-contents -->
        </main>
      </div><!-- #primary -->
    </div><!-- .wrap -->
    <?php get_footer( ); ?>