<?php get_header('custom'); ?>

<!-- Main 
====================================================================== -->
<main class="subpage-news-events">
  <!-- Subpage Title
  ====================================================================== -->
  <div class="subpage-title">
    <h1 class="subpage-title__txt hd-xs tx-center">ニュース/イベント</h1>
    <p class="subpage-title__txt-en lexend tx-xs tx-center">News & Events</p>
  </div>

  <div class="contents mb-lg">
    <div class="container-narrow">
      <div class="news-events__items">
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
        <article class="news-events__item">
          <div class="news-events__date tx-3xs">
            <time class="lexend tx-2xs md-3xs" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
              <?php echo esc_html( get_the_date('Y/m/d') ); ?>
            </time>
          </div>
          <h2 class="hd-2xs mb-5xs">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
        </article>
  <?php endwhile; ?>

        <div class="pagination">
          <?php the_posts_pagination(); ?>
        </div>

<?php else : ?>
  <p>投稿がありません。</p>
<?php endif; ?>

    </div>
  </div>

  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

<?php get_footer('custom'); ?>