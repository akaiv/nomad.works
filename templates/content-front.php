<?php akaiv_before_post(); ?>

<?php
  $posts = get_posts( array (
    'name' => 'home',
    'post_type' => 'page',
    'post_status' => 'publish',
    'posts_per_page' => 1
  ) );
  the_post();
?>

<div class="container">
  <div class="page-content">
    <?php the_content(); ?>
  </div>
</div>

<?php akaiv_after_post(); ?>

<!-- 여기부터 구인 목록 추가 -->
