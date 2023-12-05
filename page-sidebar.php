<?php
/*
  Template Name: サイドバーあり
*/
get_header( ); 
?>
<div class="page-inner two-column">
  <div class="page-main" id="pg-company">
    <div class="content">
      <div class="content-main">
        <article class="article-body">
          <div class="article-inner">
<?php
if(have_posts(  )):
  while(have_posts(  )): the_post(  );
    the_content(  );
  endwhile;
endif;
?>
          </div>
        </article>
      </div>
      <div class="content-side">
        <div class="side-box">
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer( ); ?>