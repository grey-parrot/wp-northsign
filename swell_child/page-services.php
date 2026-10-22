<?php get_header('custom'); ?>

<!-- Main 
====================================================================== -->
<main class="subpage-services">
  <!-- Subpage Title
  ====================================================================== -->
  <div class="subpage-title">
    <h1 class="subpage-title__txt hd-xs tx-center">サービス</h1>
    <p class="subpage-title__txt-en lexend tx-xs tx-center">Services</p>
  </div>

  <div class="contents">
    <!-- Services Hero
    ====================================================================== -->
    <sections class="services-hero">
      <div class="container">
        <div class="services-hero__wrapper">
          <div class="services-hero__wrapper-image">
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-service-sign.png"
              alt=""
              class="services-hero__img"
              width="192"
              height="284"
              loading="eager"
              fetchpriority="high"
              decoding="async"
            />
          </div>
          <div class="services-hero__txt">
            <h2 class="services-hero__title hd-xs">
              経営のそばで考え、<br />
              必要なものだけを、形にする。
            </h2>
            <p class="tx-4xs">
              私たちは、デザインを「つくること」そのものよりも、何を考え、どんな判断を積み重ねていくかを大切にしています。
            </p>
            <p class="tx-4xs">
              ノースサインのサービスは、「考える」ためのデザイン顧問と、「作る」ための制作メニューの2本立てです。デザイン顧問で、今どこに投資すべきかを一緒に判断し、必要になったものだけを制作メニューで形にします。
            </p>
          </div>
        </div>
      </div>
    </sections>

    <!-- サービスの全体像（デザイン顧問・制作メニュー・講座研修とページ内リンク）
    ====================================================================== -->
    <section class="services-overview">
      <div class="container">
        <div class="services-overview__pillars">
          <div class="services-overview__pillar services-overview__pillar--advisory">
            <img
              class="services-overview__icon"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-target.png"
              alt=""
              loading="lazy"
              decoding="async"
            />
            <div class="services-overview__pillar-txt">
              <p class="services-overview__pillar-label">①&nbsp;&nbsp;考える・月額</p>
              <h2 class="hd-2xs">デザイン顧問</h2>
              <p class="tx-4xs">ブランドの軸をつくり、今どこに投資すべきか、何を作るかを一緒に判断します。</p>
            </div>
          </div>
          <span class="services-overview__arrow" aria-hidden="true"></span>
          <div class="services-overview__pillar">
            <img
              class="services-overview__icon"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-service-design.png"
              alt=""
              loading="lazy"
              decoding="async"
            />
            <div class="services-overview__pillar-txt">
              <p class="services-overview__pillar-label">②&nbsp;&nbsp;作る・都度</p>
              <h2 class="hd-2xs">制作メニュー</h2>
              <p class="tx-4xs">Web・ロゴ・営業資料など、顧問で決めたものを必要な分だけ形にします。</p>
            </div>
          </div>
        </div>
        <div class="services-overview__training">
          <img
            class="services-overview__training-icon"
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-service-education.png"
            alt=""
            loading="lazy"
            decoding="async"
          />
          <h2 class="hd-2xs">＋ 講座・研修</h2>
          <p class="tx-4xs">社内にデザインの考え方を広げたい企業・組織には、研修・ワークショップもご用意しています。</p>
        </div>
        <ul class="services-overview__links">
          <li><a href="#advisory" class="services-overview__link">デザイン顧問サービス</a></li>
          <li><a href="#plans" class="services-overview__link">料金プラン</a></li>
          <li><a href="#design" class="services-overview__link">デザイン支援・制作</a></li>
          <li><a href="#training" class="services-overview__link">講座・研修</a></li>
          <li><a href="#flow" class="services-overview__link">ご依頼の流れ</a></li>
          <li><a href="#faq" class="services-overview__link">よくある質問</a></li>
        </ul>
      </div>
    </section>

    <!-- デザイン顧問サービス
    ====================================================================== -->
    <section id="advisory" class="services-advisory services-anchor">
      <div class="container">
        <h2 class="services-common__icon-title hd-xs">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-target.png"
            alt=""
            loading="lazy"
            decoding="async"
          />デザイン顧問サービス
        </h2>
        <div class="services-common__body">
          <div class="services-common__txt">
            <h3 class="services-advisory__catch hd-2xs">
              各分野の専門家を束ねる、<br />
              社外のデザイン顧問。
            </h3>
            <p class="tx-4xs">デザイナーやブランドの責任者が社内にいない企業のために、月額の顧問として経営のそばに入ります。</p>
            <p class="tx-4xs">ブランドを「ロゴやビジュアル」ではなく、事業の判断軸そのものとして捉え、言語化・構造化していきます。起業家や経営者の頭の中にある想いや構想を丁寧に整理し、何を大切にし、何を選ばないのかを一緒に考えます。</p>
            <p class="tx-4xs">決まった軸をもとに、Webサイト・営業資料・SNSなどの戦略と設計を進め、制作会社や社内メンバーへ方向性を示しながら、アウトプットをそろえていきます。ブランドの構築から管理までを担う「ブランド・マネージャー」の役割です。</p>
            <p class="tx-4xs">主な内容</p>
            <ul class="services-common__dot-list tx-4xs">
              <li>ブランドの思想・価値観の整理</li>
              <li>事業やサービスの軸の言語化</li>
              <li>ターゲット・提供価値の再定義</li>
              <li>判断基準・トーン&amp;マナーの設計</li>
              <li>Web・営業資料・SNSなど、各媒体の戦略と設計</li>
              <li>社内メンバー向けのデザイン教育・相談（戦略パートナー以上）</li>
              <li>各ブランド要素の改善支援・デザイン監修（経営パートナー）</li>
            </ul>
          </div>
          <img
            class="services-common__photo"
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/services/img-services-support1.jpg"
            alt="カラーチャートを見ながらデザインを検討する様子"
            width="525"
            height="384"
            loading="lazy"
            decoding="async"
          />
        </div>
      </div>
    </section>

    <!-- 3ヶ月ブランド構築プログラム
    ====================================================================== -->
    <section id="program" class="services-program services-anchor">
      <div class="container">
        <div class="services-program__box">
          <div class="services-program__head">
            <div class="services-program__head-txt">
              <p class="services-program__en lexend">Brand Building Program</p>
              <h2 class="services-program__title hd-2xs">はじめの3ヶ月：ブランド構築プログラム</h2>
              <p class="services-program__catch hd-xs">3ヶ月で、「選ばれる理由」と「伝え方の基準」をつくる。</p>
              <p class="services-program__lead tx-3xs">デザイン顧問のはじまりとなる、3ヶ月のプログラムです。講義とワークを組み合わせた全14回のセッションで、市場と顧客の整理から、ブランド・アイデンティティ、トーン&amp;マナー、今後の計画づくりまでを一緒に進めます。</p>
              <div class="services-program__price">
                <p class="services-program__price-main"><span>60万円</span>（税別）／3ヶ月</p>
                <p class="services-program__price-note">月20万円×3回のお支払いも可能です</p>
              </div>
            </div>
            <div class="services-program__person top-common__person top-common__person--engineer">
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-engineer.png"
                alt=""
                loading="lazy"
                decoding="async"
              />
            </div>
          </div>
          <div class="services-program__row">
            <dl class="services-program__overview">
<?php
$program_overview = [
  '期間'   => '3ヶ月',
  '回数'   => '全14回（1回90分）',
  '料金'   => '60万円（税別）。月20万円×3回のお支払いも可能です',
  '構成'   => '3つのフェーズ<br />顧客と価値を絞り込む → 価値の伝え方と目標を決める → ビジュアルの方向性を探る',
  '進め方' => '講義＋ワーク。ワークシートを使い、セッションの間に宿題もあります',
  '参加者' => '経営者・事業責任者（社内メンバーのご参加も歓迎します）',
  'ゴール' => 'ブランドの軸とトーン&amp;マナーが決まり、今後の計画が立っている状態',
];
foreach ( $program_overview as $label => $value ) :
?>
              <div class="services-program__overview-row tx-4xs">
                <dt><?php echo esc_html( $label ); ?></dt>
                <dd><?php echo wp_kses( $value, [ 'br' => [] ] ); ?></dd>
              </div>
<?php endforeach; ?>
            </dl>
            <div class="services-program__deliverables">
              <h3 class="hd-2xs">3ヶ月後に手元に残るもの</h3>
              <ul class="services-common__check-list tx-4xs">
                <li>3C分析・競合調査</li>
                <li>ターゲットとペルソナ</li>
                <li>ポジショニング</li>
                <li>ブランド・アイデンティティ</li>
                <li>ブランド人格</li>
                <li>ムードボードとトーン&amp;マナー</li>
                <li>ブランド戦略と、今後の計画</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3ヶ月・全14回のカリキュラム
    ====================================================================== -->
    <section id="curriculum" class="services-curriculum services-anchor">
      <div class="container">
        <h2 class="services-common__title hd-xs">3ヶ月・全14回のカリキュラム</h2>
        <ol class="services-curriculum__phases">
          <li class="services-curriculum__phase">
            <img
              class="services-curriculum__phase-icon services-curriculum__phase-icon--target"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-target.png"
              alt=""
              loading="lazy"
              decoding="async"
            />
            <p class="services-curriculum__phase-num lexend">PHASE 1</p>
            <h3 class="hd-2xs">ブランド構築 前半</h3>
            <p class="services-curriculum__phase-txt">顧客と提供価値を<br />絞り込む</p>
            <p class="services-curriculum__phase-day lexend">DAY 1〜5</p>
          </li>
          <li class="services-curriculum__phase">
            <img
              class="services-curriculum__phase-icon services-curriculum__phase-icon--compass"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-compass.png"
              alt=""
              loading="lazy"
              decoding="async"
            />
            <p class="services-curriculum__phase-num lexend">PHASE 2</p>
            <h3 class="hd-2xs">ブランド構築 後半</h3>
            <p class="services-curriculum__phase-txt">提供価値の伝え方と<br />成果の測り方を決める</p>
            <p class="services-curriculum__phase-day lexend">DAY 6〜9</p>
          </li>
          <li class="services-curriculum__phase">
            <img
              class="services-curriculum__phase-icon services-curriculum__phase-icon--design"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-service-design.png"
              alt=""
              loading="lazy"
              decoding="async"
            />
            <p class="services-curriculum__phase-num lexend">PHASE 3</p>
            <h3 class="hd-2xs">ブランド要素の検討</h3>
            <p class="services-curriculum__phase-txt">ビジュアルの<br />方向性を探る</p>
            <p class="services-curriculum__phase-day lexend">DAY 10〜14</p>
          </li>
        </ol>
<?php
$curriculum = [
  [
    'num'   => 'PHASE 1',
    'title' => 'ブランド構築 前半',
    'sub'   => '顧客と提供価値を絞り込む',
    'days'  => [
      [ 'DAY 1', 'ブランドとは何かを知る', 'ブランドの基本と、事業にどう活かせるのかを学びます。3ヶ月後に目指す姿も共有します。' ],
      [ 'DAY 2', '市場のチャンスを見つける<br />（3C分析・競合分析）', '顧客・競合・自社の3つの視点と競合調査から、自社にとってのチャンスを探ります。' ],
      [ 'DAY 3', '市場を分ける<br />（セグメンテーション）', 'お客様をニーズや状況ごとにグループに分け、どこに可能性があるかを見ていきます。' ],
      [ 'DAY 4', '狙うお客様を選ぶ<br />（ターゲティング・ペルソナ）', '狙うお客様を決め、その人物像をペルソナとして具体的に描きます。' ],
      [ 'DAY 5', '連想マップをつくる', 'お客様が自社やサービスから思い浮かべる言葉やイメージを書き出し、今のブランドの姿を見える形にします。' ],
    ],
  ],
  [
    'num'   => 'PHASE 2',
    'title' => 'ブランド構築 後半',
    'sub'   => '提供価値の伝え方と、成果の測り方を決める',
    'days'  => [
      [ 'DAY 6', '独自性を見つける<br />（ポジショニング）', '競合と比べて、何で選ばれるのか。自社ならではの違いを明確にします。' ],
      [ 'DAY 7', 'ブランド・アイデンティティを立てる', '「お客様にどう思われたいか」を、質の高い仮説として言葉にまとめます。' ],
      [ 'DAY 8', '具体化する（4P/4C分析）', '商品・価格・届け方・伝え方を、お客様の視点と合わせて具体的に落とし込みます。' ],
      [ 'DAY 9', 'ブランド体験を設計し、<br />目標を決める', 'ブランド要素とお客様との接点での体験を設計し、成果をどう測るかの目標を決めます。' ],
    ],
  ],
  [
    'num'   => 'PHASE 3',
    'title' => 'ブランド要素の検討',
    'sub'   => 'ブランド・アイデンティティをもとに、ビジュアルの方向性を探る',
    'days'  => [
      [ 'DAY 10', 'ブランドの源流をたどる', '創業のストーリーや想いを振り返り、自社「らしさ」を見つけます。' ],
      [ 'DAY 11', 'ブランドの人格をつくる', '会社を人に例えると、どんな性格で、どんな話し方をするのかを考えます。' ],
      [ 'DAY 12', 'ムードボードをつくる', '写真や色、書体を集めてムードボードをつくり、トーン&amp;マナーを検討します。' ],
      [ 'DAY 13', 'ブランド戦略をまとめる', 'ここまでの内容を、ブランド戦略としてひとつにまとめます。' ],
      [ 'DAY 14', '総まとめと今後の計画', '3ヶ月の成果を振り返り、Webサイトや営業資料など、次に何から取り組むかの計画を立てます。' ],
    ],
  ],
];
foreach ( $curriculum as $phase ) :
?>
        <div class="services-curriculum__detail">
          <div class="services-curriculum__detail-head">
            <p class="services-curriculum__detail-num lexend"><?php echo esc_html( $phase['num'] ); ?></p>
            <h3 class="hd-2xs"><?php echo esc_html( $phase['title'] ); ?></h3>
            <p class="services-curriculum__detail-sub tx-4xs"><?php echo esc_html( $phase['sub'] ); ?></p>
          </div>
<?php foreach ( $phase['days'] as $day ) : ?>
          <div class="services-curriculum__day">
            <p class="services-curriculum__day-num lexend"><?php echo esc_html( $day[0] ); ?></p>
            <h4 class="services-curriculum__day-title tx-3xs"><?php echo wp_kses( $day[1], [ 'br' => [] ] ); ?></h4>
            <p class="services-curriculum__day-txt tx-4xs"><?php echo wp_kses( $day[2], [] ); ?></p>
          </div>
<?php endforeach; ?>
        </div>
<?php endforeach; ?>
      </div>
    </section>

    <!-- セッションの進め方
    ====================================================================== -->
    <section class="services-session">
      <div class="container">
        <div class="services-session__head">
          <h2 class="services-common__title hd-xs">セッションの進め方</h2>
          <p class="tx-3xs">話して終わらず、次にやることが見えてくる。対話と分析を重ねながら、事業の状況に合わせて進めます。</p>
        </div>
        <ol class="services-session__steps">
          <li class="services-session__step">
            <div class="services-session__icon top-common__person top-common__person--ceo">
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-ceo.png"
                alt=""
                loading="lazy"
                decoding="async"
              />
            </div>
            <p class="services-session__num lexend">01&nbsp;&nbsp;UNDERSTAND</p>
            <h3 class="services-session__title tx-3xs">事業の「今」を、一緒にほどく。</h3>
            <p class="tx-4xs">サービスの内容、お客様に選ばれている理由、営業で感じる課題を伺います。現在のWebサイトや資料も見ながら、経営者の頭の中にある考えを整理します。</p>
          </li>
          <li class="services-session__step">
            <img
              class="services-session__icon"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-compass.png"
              alt=""
              loading="lazy"
              decoding="async"
            />
            <p class="services-session__num lexend">02&nbsp;&nbsp;DISCOVER</p>
            <h3 class="services-session__title tx-3xs">お客様の視点から、強みを見つける。</h3>
            <p class="tx-4xs">3C分析などを用いて、「誰にとって、どんな価値があるのか」を検討します。伝えるべき強みとブランドの方向性を言葉にしていきます。</p>
          </li>
          <li class="services-session__step">
            <img
              class="services-session__icon services-session__icon--target"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-target.png"
              alt=""
              loading="lazy"
              decoding="async"
            />
            <p class="services-session__num lexend">03&nbsp;&nbsp;DECIDE</p>
            <h3 class="services-session__title tx-3xs">何から取り組むか、一緒に決める。</h3>
            <p class="tx-4xs">Webサイトの伝え方、営業資料の構成、ロゴの方向性などを検討します。すべてを一度に変えるのではなく、目的と予算に合わせて、次の一手を決めます。</p>
          </li>
          <li class="services-session__step">
            <div class="services-session__icon top-common__person top-common__person--team">
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-role-team.png"
                alt=""
                loading="lazy"
                decoding="async"
              />
            </div>
            <p class="services-session__num lexend">04&nbsp;&nbsp;GROW</p>
            <h3 class="services-session__title tx-3xs">実践を振り返り、判断の軸を育てる。</h3>
            <p class="tx-4xs">取り組んだことや、お客様の反応を次のセッションで共有し、事業の変化に合わせて方針を見直します。</p>
          </li>
        </ol>
      </div>
    </section>

    <!-- デザイン顧問サービス｜料金プラン
    ====================================================================== -->
    <section id="plans" class="services-plans services-anchor">
      <div class="container">
        <h2 class="services-common__title hd-xs">デザイン顧問サービス｜料金プラン</h2>
        <p class="services-plans__lead tx-3xs">
          デザイン顧問サービスは、事業やブランドへの理解を継続的に深めながら、判断や設計を一緒に進めていく月額制のサポートです。<br class="mq-md-up" />
          単発の制作やスポット対応ではなく、中長期の視点で伴走することを前提としています。
        </p>
        <p class="services-plans__lead tx-3xs">まず3ヶ月のブランド構築プログラムでブランドの軸をつくり、その後は月額の顧問プランで、判断・設計・監修を続けます。ブランドの土台がすでにある場合は、顧問プランから始めることもできます。</p>
        <div class="services-plans__body">
          <div class="services-plans__program">
            <div class="services-plans__program-txt">
              <p class="services-common__step lexend">STEP 1</p>
              <h3 class="services-plans__program-title hd-xs">3ヶ月ブランド構築プログラム</h3>
              <p class="tx-4xs">全14回のセッションで、ブランドの軸とトーン&amp;マナーを決め、今後の計画を立てます。</p>
              <a href="#program" class="services-plans__program-link more tx-4xs">プログラムの内容を見る</a>
            </div>
            <div class="services-plans__program-price">
              <p class="services-plans__program-price-main"><span class="hd-xs">60万円</span>（税別）／3ヶ月</p>
              <p class="services-plans__program-price-note">月20万円×3回のお支払いも可能です</p>
            </div>
          </div>
          <div class="services-plans__plans-head">
            <p class="services-common__step lexend">STEP 2</p>
            <p class="tx-3xs">顧問プラン（プログラム修了後・月額）</p>
          </div>
          <div class="services-plans__items">
            <div class="services-plans__item">
              <div class="services-plans__item-head">
                <p class="tx-4xs">ブランドの軸を、日々の判断に活かす</p>
                <h3 class="services-plans__item-title hd-xs">伴走パートナー</h3>
                <p class="services-plans__item-price"><span class="hd-2xs">10万円</span>（税別）/月額</p>
              </div>
              <p class="tx-4xs">プログラムで決めたブランドの軸をもとに、ロゴ・Web・販促物など各媒体の戦略や設計をご相談いただけるプランです。定期的なセッションで、判断の軸がぶれないよう伴走します。</p>
            </div>
            <div class="services-plans__item">
              <div class="services-plans__item-head">
                <p class="tx-4xs">判断の軸を、社内に根付かせる</p>
                <h3 class="services-plans__item-title hd-xs">戦略パートナー</h3>
                <p class="services-plans__item-price"><span class="hd-2xs">15万円</span>（税別）/月額</p>
              </div>
              <p class="tx-4xs">伴走パートナーの内容に加え、社内メンバー向けのデザイン教育・相談や、社内のデザインの仕組みづくりをお手伝いするプランです。ブランドを根付かせ、判断の軸が社内に根付く仕組みをつくります。</p>
            </div>
            <div class="services-plans__item">
              <div class="services-plans__item-head">
                <p class="tx-4xs">外部CDO</p>
                <h3 class="services-plans__item-title hd-xs">経営パートナー</h3>
                <p class="services-plans__item-price"><span class="hd-2xs">20万円</span>（税別）/月額</p>
              </div>
              <p class="tx-4xs">戦略パートナーの内容に加え、単なる外部アドバイザーではなく、ブランドを実行するために伴走します。戦略・ゴール設定を行うほか、Webサイト、UIデザイン、販促ツール、SNSなど各ブランド要素の戦略策定・改善支援・デザイン監修も行えます。</p>
            </div>
          </div>
          <div class="services-plans__compare">
            <table class="services-plans__table tx-4xs">
              <thead>
                <tr>
                  <td></td>
                  <th scope="col">伴走パートナー</th>
                  <th scope="col">戦略パートナー</th>
                  <th scope="col">経営パートナー</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">月額（税別）</th>
                  <td>10万円</td>
                  <td>15万円</td>
                  <td>20万円</td>
                </tr>
                <tr>
                  <th scope="row">こんな方に</th>
                  <td>決めた軸で判断を続けたい</td>
                  <td>社内に判断の軸を根付かせたい</td>
                  <td>外部CDOとして実行まで任せたい</td>
                </tr>
<?php
// 各機能の有無（伴走・戦略・経営の順）
$plan_features = [
  'Web・営業資料・SNSなどの戦略と設計'   => [ true, true, true ],
  '社内メンバー向けのデザイン教育・相談'   => [ false, true, true ],
  '社内のデザインの判断基準・仕組みづくり' => [ false, true, true ],
  'ブランド実行に向けた戦略・ゴール設定'   => [ false, false, true ],
  '各ブランド要素の改善支援・デザイン監修' => [ false, false, true ],
  'オリジナルデザイン制作 20%OFF'          => [ true, true, true ],
];
foreach ( $plan_features as $feature => $has ) :
?>
                <tr>
                  <th scope="row"><?php echo esc_html( $feature ); ?></th>
<?php foreach ( $has as $yes ) : ?>
                  <td class="services-plans__mark<?php echo $yes ? '' : ' services-plans__mark--none'; ?>"><?php echo $yes ? '○' : '–'; ?></td>
<?php endforeach; ?>
                </tr>
<?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <ul class="services-plans__notes">
            <li>※ 顧問プランは、原則としてブランド構築プログラム修了後にご利用いただけます。ブランドの土台がすでにある場合は、顧問プランから始めることもできます。</li>
            <li>※ 制作は別途お見積もりになります。お問い合わせください。</li>
            <li>※ 表示価格はすべて税別です。セッションの頻度・時間は、ご相談内容と支援範囲に応じて個別に設定します。</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- デザイン支援・制作メニュー
    ====================================================================== -->
    <section id="design" class="services-design services-anchor">
      <div class="container">
        <h2 class="services-common__icon-title hd-xs">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-service-design.png"
            alt=""
            loading="lazy"
            decoding="async"
          />デザイン支援・制作メニュー
        </h2>
        <div class="services-common__body">
          <div class="services-common__txt services-common__txt--narrow">
            <p class="tx-4xs">
              事業の状況や目的を共有しながら、何をつくるか以前に、何をつくらないかを一緒に考え、<br class="mq-md-up" />
              UI/UXやWeb、マーケティングに関わる設計を支援します。
            </p>
            <p class="tx-4xs">
              制作そのものが目的ではなく、事業を前に進めるためのデザインであること。<br class="mq-md-up" />
              その視点を保ちながら、プロジェクトに並走します。
            </p>
            <p class="tx-4xs">※ 実制作が必要な場合は、内容に応じて別途ご相談となります。</p>
            <div>
              <p class="tx-4xs">主な内容</p>
              <ul class="services-common__bullet-list tx-4xs">
                <li>UI/UX・Web設計のレビュー・方針整理</li>
                <li>デザインアウトプットの方向性確認</li>
                <li>マーケティング施策におけるデザイン支援</li>
                <li>外注・内製に関する判断サポート</li>
              </ul>
            </div>
            <p class="tx-4xs">
              制作サポート<br />
              ロゴ・ブランド世界観構築/Webデザイン/UI/UXデザイン/<br class="mq-md-up" />
              イラスト・キャラクター作成/紙媒体制作/アニメーション
            </p>
          </div>
          <img
            class="services-common__photo"
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/services/img-services-support2.jpg"
            alt="カラーチャートを手にデザインを打ち合わせる様子"
            width="525"
            height="384"
            loading="lazy"
            decoding="async"
          />
        </div>
        <div class="services-design__menu">
          <h3 class="hd-2xs">制作メニュー（一例）</h3>
          <p class="tx-4xs">デザイン顧問で決めたことを、必要な分だけ形にします。制作メニューは、顧問契約なしでもご依頼いただけます。</p>
          <table class="services-design__table tx-4xs">
            <thead>
              <tr>
                <th scope="col">メニュー</th>
                <th scope="col">内容</th>
                <th scope="col">価格（税別）</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">スタートサイト</th>
                <td>〜5ページ。AIとSTUDIOテンプレートを活用し、短期間で公開</td>
                <td class="services-design__price">20万円</td>
              </tr>
              <tr>
                <th scope="row">スタンダードサイト</th>
                <td>〜10ページ。AI活用＋デザイナー監修</td>
                <td class="services-design__price">30万円</td>
              </tr>
              <tr>
                <th scope="row">オリジナルサイト</th>
                <td>ブランド構築を踏まえたフルオーダー</td>
                <td class="services-design__price">50万円〜</td>
              </tr>
            </tbody>
          </table>
          <p class="services-design__notes">
            ※ 上記は一例です。内容・ページ数に応じてお見積もりします。表示価格はすべて税別です。<br />
            ※ デザイン顧問のご契約中は、オリジナルデザイン制作を20%OFFでご提供します。
          </p>
        </div>
      </div>
    </section>

    <!-- 講座・研修
    ====================================================================== -->
    <section id="training" class="services-training services-anchor">
      <div class="container">
        <h2 class="services-common__icon-title hd-xs">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-service-education.png"
            alt=""
            loading="lazy"
            decoding="async"
          />講座・研修
        </h2>
        <div class="services-common__body">
          <div class="services-common__txt services-common__txt--narrow">
            <p class="tx-4xs">
              デザインを、一部の専門家だけのものにしないために、<br class="mq-md-up" />
              考え方や視点を共有する場づくりも行っています。
            </p>
            <p class="tx-4xs">
              スキルを教える講座というよりも、<br class="mq-md-up" />
              実際の事業や課題を題材にしながら、<br class="mq-md-up" />
              なぜそう考えるのか、どう判断するのかを一緒に考えていく形式です。
            </p>
            <p class="tx-4xs">
              チーム内での共通認識を育てたい場合や、<br class="mq-md-up" />
              デザインを意思決定に活かしたい企業・組織に向けた<br class="mq-md-up" />
              研修・ワークショップもご相談いただけます。
            </p>
            <div>
              <p class="tx-4xs">主な内容</p>
              <ul class="services-common__bullet-list tx-4xs">
                <li>ノンデザイナー向けUI/UX研修</li>
                <li>ブランディング講座</li>
              </ul>
            </div>
          </div>
          <img
            class="services-common__photo"
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/services/img-services-support3.jpg"
            alt="付箋を貼りながらワークショップを進める様子"
            width="525"
            height="384"
            loading="lazy"
            decoding="async"
          />
        </div>
      </div>
    </section>

    <!-- ご依頼の流れ
    ====================================================================== -->
    <section id="flow" class="services-flow services-anchor">
      <div class="container">
        <h2 class="services-common__title hd-xs">ご依頼の流れ</h2>
        <ol class="services-flow__steps">
<?php
$flow_steps = [
  [ '無料ブランド勉強会（60分）', '事業の状況と課題を伺い、3C分析を使って強みと課題を一緒に整理します。' ],
  [ 'ご提案・お見積もり', '課題に合わせて、ブランド構築プログラムの進め方をご提案します。' ],
  [ '3ヶ月ブランド構築プログラム', '全14回のセッションで、ブランドの軸とトーン&amp;マナーを決めます。' ],
  [ '顧問プランで各接点へ展開', '決まった軸をもとに、顧問プランでWeb・営業資料・SNSなどの戦略と設計を進め、必要なものを制作します。' ],
  [ '振り返りと改善', 'お客様の反応や事業の変化を見ながら、方針を見直し、改善を続けます。' ],
];
foreach ( $flow_steps as $i => $step ) :
?>
          <li class="services-flow__step<?php echo 2 === $i ? ' services-flow__step--program' : ''; ?>">
            <p class="services-flow__num lexend"><span>STEP</span><?php echo esc_html( $i + 1 ); ?></p>
            <div class="services-flow__txt">
              <h3 class="hd-2xs"><?php echo esc_html( $step[0] ); ?></h3>
              <p class="tx-4xs"><?php echo wp_kses( $step[1], [] ); ?></p>
            </div>
          </li>
<?php endforeach; ?>
        </ol>
      </div>
    </section>

    <!-- よくある質問
    ====================================================================== -->
    <section id="faq" class="services-faq services-anchor">
      <div class="container">
        <h2 class="services-common__title hd-xs">よくある質問</h2>
        <dl class="services-faq__list">
<?php
$faqs = [
  [ 'まだ課題がはっきりしていなくても相談できますか？', 'はい。「今の伝え方に違和感がある」「何から始めたらよいかわからない」といった段階からお話を伺います。まずは無料ブランド勉強会で、現状を一緒に整理しましょう。' ],
  [ 'Webサイトやロゴの制作も含まれますか？', '実制作は顧問料に含まれません。顧問プランで方向性や優先順位を整理し、制作が必要になった際に別途お見積もりします。顧問契約中は、オリジナルデザイン制作を20%OFFでご提供します。' ],
  [ '制作だけを依頼することはできますか？', 'はい、可能です。制作メニューは顧問契約なしでもご依頼いただけます。' ],
  [ 'どのプランを選べばよいかわかりません。', 'まずは3ヶ月のブランド構築プログラムから始めていただき、プログラムの最終回で、次に取り組むことに合わせて顧問プランをご提案します。決めた軸で判断を続けたい場合は伴走パートナー、社内への定着も進めたい場合は戦略パートナー、実行段階の改善支援・監修まで必要な場合は経営パートナーが目安です。' ],
  [ 'セッションの回数や契約期間は決まっていますか？', 'ブランド構築プログラムは、3ヶ月・全14回（1回90分）で、3ヶ月のご契約が前提です。その後の顧問プランのセッションの頻度・時間は、課題や支援内容に合わせて個別に設定します。契約期間などの条件は、ご契約前にご案内します。' ],
  [ 'ブランド構築プログラムを受けずに、顧問プランから始められますか？', 'ターゲットや提供価値、トーン&amp;マナーなど、ブランドの土台がすでにある場合は、顧問プランから始めることもできます。無料ブランド勉強会で現状を伺い、ご提案します。' ],
];
foreach ( $faqs as $faq ) :
?>
          <div class="services-faq__item">
            <dt class="services-faq__q tx-3xs"><?php echo esc_html( $faq[0] ); ?></dt>
            <dd class="services-faq__a tx-4xs"><?php echo wp_kses( $faq[1], [] ); ?></dd>
          </div>
<?php endforeach; ?>
        </dl>
      </div>
    </section>

    <!-- 無料ブランド勉強会バナー（トップページと共通のデザイン）
    ====================================================================== -->
    <section class="services-brand-study mb-lg">
      <div class="container">
        <div class="top-brand-study">
          <div class="top-brand-study__txt">
            <h2 class="top-brand-study__title">
              60分<span class="top-brand-study__title-sub"> 無料ブランド勉強会</span>
            </h2>
            <p class="top-brand-study__lead">
              その価格、下げずに選ばれていますか？
            </p>
            <ul class="top-brand-study__chips">
              <li class="top-brand-study__chip">所要時間 60分</li>
              <li class="top-brand-study__chip">参加費 無料</li>
              <li class="top-brand-study__chip">オンライン（Zoom）</li>
              <li class="top-brand-study__chip">各回5社までの少人数制</li>
            </ul>
            <a href="https://northsign.jp/brand-study/" class="top-brand-study__button">
              無料勉強会の詳細を見る
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
  </div>

  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

<?php get_footer('custom'); ?>