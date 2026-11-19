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
          alt="ノースサインのメンバー"
          loading="eager"
          fetchpriority="high"
          decoding="async"
        />
      </div>
      <div class="top-hero__txt">
        <h1 class="top-hero__catch hd-sm lh-13 mb-3xs">
          経営のそばにいる、<br />
          あなたの会社の<br />
          デザイン顧問。
        </h1>
        <p class="top-hero__txt1 tx-xs lh-16 mb-3xs">
          顧問デザイナー・外部CDOとして、<br />
          企業・組織のブランドづくりに<br class="mq-md-down" />伴走します。
        </p>
        <p class="top-hero__txt2 tx-4xs lh-16">
          デザインを「作る」前に、<br />
          何を作らないかから一緒に考えます。
        </p>
      </div>
    </div>
  </section>

  <!-- News & Events
    ======================================== -->
  <section class="top-news-events">
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

      <!-- 無料ブランド勉強会バナー -->
      <div class="top-brand-study">
        <div class="top-brand-study__txt">
          <h2 class="top-brand-study__title">
            90分<span class="top-brand-study__title-sub"> 無料ブランド勉強会</span>
          </h2>
          <p class="top-brand-study__lead">
            その価格、下げずに選ばれていますか？
          </p>
          <ul class="top-brand-study__chips">
            <li class="top-brand-study__chip">所要時間 90分</li>
            <li class="top-brand-study__chip">参加費 無料</li>
            <li class="top-brand-study__chip">オンライン（Zoom）</li>
            <li class="top-brand-study__chip">各回5社までの少人数制</li>
          </ul>
          <a href="https://northsign.jp/brand-study/" class="top-brand-study__button">
            無料勉強会に申し込む
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/brand-study/img/ico-arrow-white.svg"
              alt=""
              width="20"
              height="20"
            />
          </a>
        </div>
        <div class="top-brand-study__illust">
          <img
            class="top-brand-study__image"
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/brand-study/img/hero.webp"
            alt=""
            width="152"
            height="190"
            loading="lazy"
            decoding="async"
          />
          <span class="top-brand-study__badge">参加無料</span>
        </div>
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
            <picture>
              <source
                media="(max-width: 767px)"
                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-concept_sp.png"
                width="624"
                height="720"
              />
              <img
                class="top-concept__image"
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-concept_pc.png"
                alt="北極星を見上げる2人のイラスト"
                width="1102"
                height="1374"
                loading="lazy"
                decoding="async"
              />
            </picture>
          </div>
          <div class="top-concept__wrapper-txt">
            <h2 class="top-concept__title lexend hd-xs mb-3xs">Concept</h2>
            <p class="top-concept__txt1 tx-sm mb-2xs">
              あなたの会社の「北極星」を、<br />
              ともに見つける。
            </p>
            <p class="top-concept__txt2 tx-3xs mb-2xs">
              社名のノースサインは、北極星をイメージしています。<br /><br />
              私たちはデザインを、単なる表現や装飾ではなく、<br class="mq-md-up" />
              事業や経営を前に進めるための重要なプロセスだと考えています。<br /><br />
              そして、ブランド戦略は経営戦略と切り離せません。<br class="mq-md-up" />
              どこを目指し、何に投資し、何をやらないのか。<br class="mq-md-up" />
              迷ったときに立ち返る、その判断の軸こそが、<br class="mq-md-up" />
              あなたの会社にとっての「北極星」です。<br /><br />
              私たちは、要件を受け取って形にするだけではなく、<br class="mq-md-up" />
              発注者と受注者という関係を超え、チームの一員のように、<br class="mq-md-up" />
              経営者やメンバーと思考を共有しながら、<br class="mq-md-up" />
              その北極星を一緒に探し、一緒に決めていきます。<br /><br />
              そうして見つけた北極星を、ビジュアルやモーションの力で表現し、<br class="mq-md-up" />
              ひと目で伝わり、記憶に残る、<br class="mq-md-up" />
              唯一無二のブランドをつくります。
            </p>
            <div class="top-common__wrapper-more">
              <a href="<?php echo esc_url( get_permalink( get_page_by_path('about'))); ?>" class="top-common__more more tx-3xs"
                >私たちについて</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 私たちのサービス
    ======================================== -->
    <section class="top-our-role">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            私たちのサービス
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Our service</p>
        </div>

        <div class="top-our-role__intro tx-center mb-sm">
          <p class="top-our-role__lead hd-xs mb-3xs">
            私たちは、各分野の専門家を束ねる<br />
            「デザイン顧問」です。
          </p>
          <p class="top-our-role__label tx-4xs mb-3xs">
            貴社専属の「ブランド・マネージャー」
          </p>
          <p class="top-our-role__intro-txt tx-3xs">
            デザイナーやブランドの責任者が社内にいない企業にとっての、<br class="mq-md-up" />
            社外のブランド・マネージャー、外部CDOとしての役割をしております。
          </p>
        </div>

        <div class="top-our-role__row mb-sm">
          <div class="top-our-role__txt tx-4xs">
            <p class="top-our-role__question tx-3xs mb-3xs">
              せっかく良い事業やサービスがあっても、<br class="mq-md-up" />
              その価値がお客様に伝わっていない。<br class="mq-md-up" />
              自社が大切にしているスタンスが、外から見えていない。<br class="mq-md-up" />
              そんなことはありませんか？
            </p>
            <p class="mb-3xs">
              Webサイト、営業資料、SNS、採用ページ。接点が増えるほど、制作会社やエンジニア、マーケター、社内のメンバーなど、関わる人も増えていきます。一人ひとりが優秀でも、目指す方向がそろっていなければ、伝わるメッセージは少しずつずれていきます。
            </p>
            <p>
              ノースサインは、月額の顧問として経営のそばに入り、ブランドの軸をつくって、社内外の専門家へ方向性を示せるよう、ブランドステートメントを作り、さらにそれを社内外に伝えられるよう伴走し、必要に応じてクリエイティブの力でサポートしております。
            </p>
          </div>

          <div class="top-our-role__diagram">
            <div class="top-our-role__ceo">
              <div class="top-common__person top-common__person--ceo">
                <img
                  src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-ceo.png"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </div>
              <p class="top-our-role__ceo-txt">経営者・事業責任者</p>
            </div>
            <p class="top-our-role__connector">ブランドの軸を一緒につくる</p>
            <div class="top-our-role__manager">
              <p class="top-our-role__manager-sub">ノースサイン</p>
              <p class="top-our-role__manager-title">デザイン顧問</p>
              <p class="top-our-role__manager-sub">ブランド・マネージャー</p>
            </div>
            <p class="top-our-role__connector">方向性を示し、アウトプットをそろえる</p>
            <ul class="top-our-role__specialists">
              <li class="top-our-role__specialist">
                <div class="top-common__person top-common__person--designer">
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-designer.png"
                    alt=""
                    loading="lazy"
                    decoding="async"
                  />
                </div>
                <p class="top-our-role__specialist-name">デザイナー</p>
                <p class="top-our-role__specialist-txt">ロゴ・Web</p>
              </li>
              <li class="top-our-role__specialist">
                <div class="top-common__person top-common__person--engineer">
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-engineer.png"
                    alt=""
                    loading="lazy"
                    decoding="async"
                  />
                </div>
                <p class="top-our-role__specialist-name">エンジニア</p>
                <p class="top-our-role__specialist-txt">サイト・UI</p>
              </li>
              <li class="top-our-role__specialist">
                <div class="top-common__person top-common__person--marketer">
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-marketer.png"
                    alt=""
                    loading="lazy"
                    decoding="async"
                  />
                </div>
                <p class="top-our-role__specialist-name">マーケター</p>
                <p class="top-our-role__specialist-txt">SNS・広告</p>
              </li>
              <li class="top-our-role__specialist">
                <div class="top-common__person top-common__person--team">
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-team.png"
                    alt=""
                    loading="lazy"
                    decoding="async"
                  />
                </div>
                <p class="top-our-role__specialist-name">社内チーム<br />制作会社</p>
                <p class="top-our-role__specialist-txt">営業資料・販促物</p>
              </li>
            </ul>
          </div>
        </div>

        <div class="services-overview top-our-role__overview mb-sm">
          <?php get_template_part( 'template-parts/services-overview' ); ?>
        </div>

        <div class="tx-center">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('services'))); ?>"
            class="top-common__link more tx-xs"
            >サービス詳細はこちら</a
          >
        </div>
      </div>
    </section>

    <!-- プロジェクト事例紹介
    ======================================== -->
    <section class="top-projects">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            プロジェクト事例紹介
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Projects</p>
        </div>
        <div class="top-projects__items mb-sm">
<?php
// 表示件数（2カラム×3段）
$projects_limit = 6;

// 管理画面で「トップに固定表示」をオンにした事例（新しい順）
$pinned_ids = get_posts(array(
  'post_type'      => 'projects',
  'posts_per_page' => $projects_limit,
  'fields'         => 'ids',
  'meta_key'       => 'top_pinned',
  'meta_value'     => '1',
));

// 残りの枠は、固定していない事例の新しい順で埋める
$latest_ids = array();
if ( count($pinned_ids) < $projects_limit ) {
  $latest_ids = get_posts(array(
    'post_type'      => 'projects',
    'posts_per_page' => $projects_limit - count($pinned_ids),
    'fields'         => 'ids',
    'post__not_in'   => $pinned_ids,
  ));
}

$project_ids = array_merge($pinned_ids, $latest_ids);

$projects_query = new WP_Query(array(
  'post_type'      => 'projects',
  'post__in'       => $project_ids ? $project_ids : array(0),
  'orderby'        => 'post__in',
  'posts_per_page' => $projects_limit,
  'no_found_rows'  => true,
));
?>

<?php if ( $projects_query->have_posts() ) : ?>
  <div class="projects-grid__items">
    <?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
      <article <?php post_class('projects-grid__item'); ?>>
        <a class="projects-grid__link" href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('large', [ 'class' => 'projects-grid__img', 'alt' => '' ]); ?>
      <?php endif; ?>
          <div class="projects-grid__caption">
      <?php if ( get_field('company_name') ) : ?>
            <p class="projects-grid__company"><?php the_field('company_name'); ?> 様</p>
      <?php endif; ?>
            <h3 class="projects-grid__title"><?php the_title(); ?></h3>
          </div>
        </a>
      </article>
    <?php endwhile; ?>
  </div>

<?php else : ?>
  <p>投稿がありません。</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

        </div>
        <div class="tx-center">
          <a href="<?php echo esc_url( get_post_type_archive_link('projects') ); ?>" class="top-common__link more tx-xs">事例をもっと見る</a>
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
            月額制のデザイン顧問サービスをご用意しています。
          </p>
        </div>
        <div class="top-design-advisory-plans__items mb-3xs">
          <div class="top-design-advisory-plans__item box">
            <p class="top-design-advisory-plans__item-txt1 tx-4xs mb-4xs">
              ブランドの軸を、日々の判断に活かす
            </p>
            <h3 class="top-design-advisory-plans__item-title hd-xs mb-4xs">伴走パートナー</h3>
            <h4 class="top-design-advisory-plans__item-price hd-2xs">10万円<span class="tx-4xs">（税別）/月額</span></h4>
          </div>
          <div class="top-design-advisory-plans__item box">
            <p class="top-design-advisory-plans__item-txt1 tx-4xs mb-4xs">
              判断の軸を、社内に根付かせる
            </p>
            <h3 class="top-design-advisory-plans__item-title hd-xs mb-4xs">戦略パートナー</h3>
            <h4 class="top-design-advisory-plans__item-price hd-2xs">15万円<span class="tx-4xs">（税別）/月額</span></h4>
          </div>
          <div class="top-design-advisory-plans__item box">
            <p class="top-design-advisory-plans__item-txt1 tx-4xs mb-4xs">外部CDO</p>
            <h3 class="top-design-advisory-plans__item-title hd-xs mb-4xs">
              経営パートナー
            </h3>
            <h4 class="top-design-advisory-plans__item-price hd-2xs">20万円<span class="tx-4xs">（税別）/月額</span></h4>
          </div>
        </div>
        <p class="top-design-advisory-plans__comments mb-md">
          ※ 制作は別途お見積もりになります。お問い合わせください。<br /><br />
          ※ 表示価格はすべて税別です。
        </p>
        <div class="tx-center">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('services'))); ?>"
            class="top-common__link more tx-xs"
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
                <p class="front-posts__date">
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

    <!-- 情報発信
    ======================================== -->
    <section class="top-media">
      <div class="container">
        <div class="top-common__title">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">情報発信</h2>
          <p class="top-common__title-en lexend tx-3xs">Media</p>
        </div>
        <div class="top-media__items">
          <div class="top-media__item box">
            <span class="top-media__icon top-media__icon--note lexend" aria-hidden="true">note</span>
            <div class="top-media__body">
              <h3 class="top-media__title lexend">note</h3>
              <p class="tx-4xs">
                経営者・事業責任者に向けて、ブランドづくりのヒントをコラムで発信しています。
              </p>
              <a href="https://note.com/northsign"
                class="more tx-3xs"
                target="_blank"
                rel="noopener"
                >noteを読む</a
              >
            </div>
          </div>
          <div class="top-media__item box">
            <img
              class="top-media__icon"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/ico-youtube.svg"
              alt=""
              width="72"
              height="50"
              loading="lazy"
              decoding="async"
            />
            <div class="top-media__body">
              <h3 class="top-media__title lexend">YouTube</h3>
              <p class="tx-4xs">
                ブランディングやデザインの考え方を、動画でわかりやすくお届けしています。
              </p>
              <a href="https://www.youtube.com/@northsign_jp"
                class="more tx-3xs"
                target="_blank"
                rel="noopener"
                >チャンネルを見る</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 相談してみる
    ======================================== -->
    <section class="top-contact">
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
