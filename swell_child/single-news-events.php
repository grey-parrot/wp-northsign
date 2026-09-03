<?php get_header('custom'); ?>

<!-- Main 
====================================================================== -->
<main class="subpage-news-events-detail">
  <!-- Subpage Title
  ====================================================================== -->
  <div class="subpage-title">
    <h1 class="subpage-title__txt hd-xs tx-center">ニュース/イベント</h1>
    <p class="subpage-title__txt-en lexend tx-xs tx-center">News & Events</p>
  </div>

  <div class="contents mb-lg">
    <div class="container-narrow">
      <div class="news-events__items mb-lg">
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
        <article class="news-events__item mb-md">
          <div class="news-events__date tx-3xs">
            <time class="lexend tx-2xs md-3xs" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
              <?php echo esc_html( get_the_date('Y/m/d') ); ?>
            </time>
          </div>
          <h2 class="hd-2xs"><?php the_title(); ?></h2>
          <p class="tx-4xs md-3xs"><?php the_content(); ?></p>
        </article>
  <?php endwhile; ?>
<?php endif; ?>
      <a href="<?php echo esc_url( get_post_type_archive_link('news-events') ); ?>" class="tx-4xs">
        ニュース／イベント 一覧へ
      </a>
    </div>
  </div>


  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

<?php get_footer('custom'); ?>
