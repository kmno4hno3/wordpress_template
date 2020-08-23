<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if( have_posts()): while(have_posts()): the_post(); ?>
      <!-- ここに記事一覧に表示したいコンテンツを記述 -->
    <?php endwhile; endif;?> <!-- ループ終了 -->
  </div><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
