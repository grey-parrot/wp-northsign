<?php get_header('custom'); ?>

<!-- Main
====================================================================== -->
<main class="front-page">

  <!-- Top Hero
    ====================================================================== -->
  <section class="top-hero">
    <div class="top-hero__wrapper">
      <div class="top-hero__wrapper-image">
        <img
          class="top-hero__image"
          src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-hero.jpg"
          alt="起業家のアイディアをイノベーションに変える、ノースサインのブランディングイメージ"
          loading="eager"
          fetchpriority="high"
          decoding="async"
        />
      </div>
      <div class="top-hero__txt">
        <h1 class="top-hero__catch hd-sm lh-13 mb-3xs">
          起業家のアイディアを<br />
          イノベーションに変える。
        </h1>
        <p class="top-hero__txt1 tx-xs lh-13 mb-3xs">
          スタートアップの意思決定に並走する、<br />
          協創型デザインパートナー。
        </p>
        <p class="top-hero__txt2 tx-4xs lh-13">
          デザインを「作る」前に、<br />
          何を作らないかから一緒に考えます。
        </p>
      </div>
    </div>
  </section>

  <!-- News & Events
    ======================================== -->
  <section class="top-news-events section">
    <div class="container">

      <h2 class="top-news-events__title-en lexend hd-xs mb-3xs">
        News & Events
      </h2>
      <div class="top-news-events__inner">
<?php
$news_events = new WP_Query([
  'post_type'      => 'news-events',
  'posts_per_page' => 1,
  'no_found_rows'  => true, // パフォーマンス最適化
]);
?>
<?php if ( $news_events->have_posts() ) : ?>
        <dl class="top-news-events__list">
<?php while ( $news_events->have_posts() ) : $news_events->the_post(); ?>
          <dt class="top-news-events__date tx-3xs">
            <time class="lexend" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
              <?php echo esc_html( get_the_date('Y/m/d') ); ?>
            </time>
          </dt>
          <dd class="top-news-events__item tx-3xs">            
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>   
          </dd>
<?php endwhile; ?>
        </dl>
        <a href="<?php echo esc_url( get_post_type_archive_link('news-events') ); ?>" class="top-news-events__more more tx-3xs">
          すべて見る
        </a>
<?php endif; ?>
<?php wp_reset_postdata(); ?>    
      </div>
    </div>
  </section>

  <div class="contents">
    <!-- Concept
    ======================================== -->
    <section class="top-concept">
      <div class="container">
        <div class="top-concept__wrapper">
          <div class="top-concept__wrapper-image">
            <img
              class="top-concept__image"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-concept.png"
              alt="コンセプトイメージ"
              loading="lazy"
              decoding="async"
            />
          </div>
          <div class="top-concept__wrapper-txt">
            <h2 class="top-concept__title lexend hd-xs mb-3xs">Concept</h2>
            <p class="top-concept__txt1 tx-sm mb-2xs">
              あなたの会社の「北極星」を、<br />
              ともに見つける。
            </p>
            <p class="top-concept__txt2 tx-3xs mb-2xs">
              経営のそばで、考え続けるパートナーとして。<br /><br />
              起業家の頭の中にあるアイディアを整理し、<br />
              ブランドの軸を共に探し、世界観を構築していく。<br />
              それが、私たちの大好きな仕事です。<br /><br />
              私たちは、デザインをただ見た目を装飾するものだとは<br />
              考えていません。<br />
              経営戦略と密接に関わるものだと捉えています。<br /><br />
              従来型の発注者・受注者の関係性を超えて、<br />
              御社のデザイン顧問として<br />
              長期的に、貴社のブランドやサービスづくりに伴走します。
            </p>
            <div class="top-common__wrapper-more">
              <a href="/" class="top-common__more more tx-3xs"
                >私たちについて</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 私たちの役割
    ======================================== -->
    <section class="top-our-role">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            私たちの役割
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Our role</p>
        </div>
      </div>
    </section>

    <!-- 私たちのサービス
    ======================================== -->
    <section class="top-our-service">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            私たちのサービス
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Our service</p>
        </div>
      </div>
    </section>

    <!-- あわせてご依頼いただけること
    ======================================== -->
    <section class="top-other-services">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            あわせてご依頼いただけること
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Other services</p>
        </div>
      </div>
    </section>

    <!-- プロジェクト事例
    ======================================== -->
    <section class="top-projects">
      <div class="container-middle">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            プロジェクト事例
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Projects</p>
        </div>
        <div class="top-projects__items mb-xs">
<?php
$args = array(
  'post_type'      => 'projects',
  'posts_per_page' => 3, // 表示件数
  'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
);

$projects_query = new WP_Query($args);
?>

<?php if ( $projects_query->have_posts() ) : ?>
  <div class="list-projects__items">

    <?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
      <article <?php post_class('list-projects__item'); ?>>
        <div class="list-projects__inner">

          <div class="list-projects__body">
            <h2 class="hd-2xs mb-4xs">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>

      <?php if ( get_field('company_name') ) : ?>
            <p class="project-company tx-3xs mb-4xs">
              <?php the_field('company_name'); ?>
            </p>
      <?php endif; ?>

            <div class="post_content tx-4xs mb-3xs">
              <?php the_excerpt(); ?>
            </div>
          </div>
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="list-projects__thumb">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>

  <div class="pagination">
    <?php
      echo paginate_links(array(
        'total' => $projects_query->max_num_pages
      ));
    ?>
  </div>

<?php else : ?>
  <p>投稿がありません。</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

        </div>
        <div class="top-common__wrapper-more">
          <a href="<?php echo esc_url( get_post_type_archive_link('projects') ); ?>" class="top-common__more more tx-3xs">もっと見る</a>
        </div>
      </div>
    </section>

    <!-- デザイン顧問サービス｜料金プラン
    ======================================== -->
    <section class="top-design-advisory-plans">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            デザイン顧問サービス｜料金プラン
          </h2>
          <p class="top-common__title-en lexend tx-3xs mb-md">
            Design Advisory Plans
          </p>
          <p class="top-design-advisory-plans__txt tx-3xs tx-center mb-md">
            貴社の事業を継続的に理解し、伴走しながら支援を行うため、<br
              class="mq-md-up"
            />
            月額制でのデザイン顧問サービスをご用意しています。
          </p>
        </div>
        <div class="top-design-advisory-plans__items mb-xs">
          <div class="top-design-advisory-plans__item box">
            <p class="top-design-advisory-plans__item-txt1 tx-4xs mb-4xs">
              選ばれるブランドの土台をつくる
            </p>
            <h3 class="top-design-advisory-plans__item-title hd-xs mb-4xs">伴走パートナー</h3>
            <h4 class="top-design-advisory-plans__item-price hd-2xs mb-4xs">10万円/月額</h4>
          </div>
          <div class="top-design-advisory-plans__item box">
            <p class="top-design-advisory-plans__item-txt1 tx-4xs mb-4xs">
              判断の軸を、社内に根付かせる
            </p>
            <h3 class="top-design-advisory-plans__item-title hd-xs mb-4xs">戦略パートナー</h3>
            <h4 class="top-design-advisory-plans__item-price hd-2xs mb-4xs">15万円/月額</h4>
          </div>
          <div class="top-design-advisory-plans__item box">
            <p class="top-design-advisory-plans__item-txt1 tx-4xs mb-4xs">外部CDO</p>
            <h3 class="top-design-advisory-plans__item-title hd-xs mb-4xs">
              経営パートナー
            </h3>
            <h4 class="top-design-advisory-plans__item-price hd-2xs mb-4xs">20万円/月額</h4>
          </div>
        </div>
        <p class="top-design-advisory-plans__comments tx-4xs mb-md">
          ※ 制作は別途お見積りになります。お問い合わせください。<br /><br />
          ※ 表示価格はすべて税別です。
        </p>
        <div class="top-design-advisory-plans__wrapper-link tx-center">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('services'))); ?>"
            class="top-design-advisory-plans__link more tx-xs"
            >サービス詳細はこちら</a
          >
        </div>
      </div>
    </section>

    <!-- ブログ
    ======================================== -->
    <section class="top-journal">
      <div class="container-middle">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">ブログ</h2>
          <p class="top-common__title-en lexend tx-3xs">Journal</p>
        </div>

<?php
$swell_posts = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => 3,
  'no_found_rows'  => true,
]);
?>

<?php if ( $swell_posts->have_posts() ) : ?>

        <div class="front-posts__items">
  <?php while ( $swell_posts->have_posts() ) : $swell_posts->the_post(); ?>

          <article <?php post_class('front-posts__item'); ?>>
            <div class="front-posts__inner">

              <!-- 左：テキスト -->
              <div class="front-posts__body">
                <h3 class="hd-2xs mb-2xs">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <div class="tx-4xs mb-4xs">
                  <?php the_excerpt(); ?>
                </div>
                <p class="front-posts__date tx-5xs">
                  <?php echo esc_html( get_the_date('Y.m.d') ); ?>
                </p>
              </div>

              <!-- 右：アイキャッチ -->
    <?php if ( has_post_thumbnail() ) : ?>

              <div class="front-posts__thumb">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium'); ?>
                </a>
              </div>

    <?php endif; ?>

            </div>
          </article>
  
  <?php endwhile; ?>

        </div>

        <div class="top-common__wrapper-more">
          <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>"class="top-common__more more tx-3xs">
            投稿一覧へ
          </a>
        </div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

      </div>
    </section>

    <!-- 相談してみる
    ======================================== -->
    <section class="top-contact mb-lg">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            相談してみる
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Contact</p>
        </div>
        <div class="top-contact__clock">
          <div class="bg-watch">
            <span class="watch-center"></span>
            <span class="watch-hour"></span>
            <span class="watch-min"></span>
            <span class="watch-sec"></span>
          </div>
        </div>
        <div class="top-contact__item">
          <p class="top-contact__txt tx-4xs tx-center mb-2xs">
            まずは、一緒に考える時間を、つくりませんか。
          </p>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact'))); ?>" class="button tx-4xs bg-white mb-3xs"
            >ご相談はこちら</a
          >
        </div>
      </div>
    </section>
  </div>
  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

<?php get_footer('custom'); ?>
