<?php
/*template name: company*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5VJS2MHB');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php wp_head(); ?>
    <meta name="format-detection" content="telephone=no" />


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- slick slide -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/import.css" />
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/TextPlugin.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/topanimation.js" defer></script>
    <style>
    html {
        margin-top: 0 !important;
    }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VJS2MHB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- mv -->
    <div class="company-mv-container" style="display: block;">
        <div class="company-mv">
            <div class="mv-first-row">
                <div class="font-50 animate-text-before line-height-two smile-text">子の為、孫の為に100年先の日本の笑顔の為に。</div>
            </div>
            <div class="mv-saitama-grid">
                <div class="saitama-linkarea-one">
                    <a href="<?php echo home_url(); ?>/company/office" class="hover-large zoom-in color-change">
                        <div class="saitama-area-one margin-t35">
                            <div class="font-16">
                                <div class="saitama-one-pwidth">
                                    さいたま市・白岡市・加須市に 車輌営業所があり急な依頼にも スピード対応可能。<br>
                                    中型・大型ウィングトラック 毎日60台以上対応可能。</br>
                                    羽生市・久喜市・さいたま市に 物流センターを配置し、 一時保管・流通加工中継基地として
                                    いつでも利用可能。<br>
                                    羽生物流センターでは40Fのバイングも可能。
                                </div>
                            </div>
                            <div class="company-mv-btn">事務所紹介</div>
                        </div>
                        <div class="saitama-area-two">
                            <div class="vertical-text font-30 margin-t35 animate-text-before pc">お仕事に</div>
                        </div>
                        <div class="saitama-area-three">
                            <div class="vertical-text font-30 margin-t35 animate-text-before pc">近隣の</div>
                            <div class="vertical-text font-30 margin-t35 animate-text-before sp">近隣のお仕事に</div>
                        </div>
                        <div class="saitama-area-four">
                            <div class="vertical-text font-80 font-reduce margin-t35 animate-text-before saitama">埼玉県
                            </div>
                        </div>
                    </a>
                </div>

                <div class="saitama-area-five grid-align-selfend">
                    <a href="<?php echo home_url(); ?>/company/about" class="hover-large zoom-in color-change">
                        <div class="mv-160-before founding">
                            <div>
                                <p class="font-34 line-height-one">17年<span class="font-20">にて従業の皆様</span>170名、</p>
                                <div class="font-34 line-height-one">年商20億を達成</div>
                            </div>
                        </div>
                        <div class="font-16 saitama-five-width active-company">
                            従業員の皆様を大切にし、お客様を大切にし、地域に貢献できる企業として進行形で元気に活躍しているアクティブな企業です！</div>
                        <div class="company-mv-btn">会社概要</div>
                    </a>
                </div>
                <div class="saitama-area-six">
                    <div class="mv-160-before peace-mind">
                        <div>
                            <p class="font-20">して従業員の皆様に働いてもらえる</p>
                            <p class="font-20">環境整備のための<span class="font-30">働き方改革</span>に<span
                                    class="font-30">積極的</span>に対応
                            </p>
                        </div>
                    </div>
                </div>
                <div class="saitama-area-seven">
                    <p class="font-50 line-height-two">働き方改革 環境対策</p>
                </div>
                <div class="saitama-area-eight">
                    <p class="font-20 saitama-eight-width line-height-two">クライアント様への働き方・環境対策にも積極的</p>
                </div>
                <div class="grid-space"></div>
                <div class="saitama-area-nine">
                    <p class="font-80 shinkan-strength animate-text-before">しんけんの強み</p>
                </div>
                <div class="change-one font-150 line-height-one animate-text-before">『運ぶ』を変える</div>
                <div class="change-two hover-large">
                    <a href="<?php echo home_url(); ?>/company/business" class="zoom-in color-change">
                        <div class="zoom-business pb20">
                            <div class="font-16">
                                お客様の要望を叶えられる。これに尽きます。弊社は“物流”を、パッケージ化して売る「商品」ではなく、あくまでもお客様の要望を叶えるための「手段」として捉えています。それは弊社の他事業についても同様です。常にお客様目線で、何をしたら良いかを考えます。これが弊社の強みであり、ポリシーです。お客様が10社いらっしゃれば、必ず10通りの輸送方法が存在します。あらゆる商品に精通した物流企業になるべく日々輸送品質の向上に勤め、毎月定例でドライバー安全会議を開催し、安全管理・品質管理を徹底しております。また、当社車輌には全てデジタルタコグラフや車輌位置管理装置（GPS）等を装着し、お客様の大切な商品を徹底的に管理しております。
                            </div>
                            <div class="company-mv-btn">事業内容</div>
                        </div>
                    </a>
                </div>
                <div class="change-three">
                    <p class="font-50 vertical-text-right line-height-two quality-control">品質管理・安全管理
                    </p>
                </div>
                <div class="change-area-five">
                    <a href="<?php echo home_url(); ?>/company/challenge" class="zoom-in color-change">
                        <div class="change-five hover-large">
                            <div class="zoom-challenge">
                                <p class="font-80">新たな<br class="sp">挑戦への一歩</p>
                                <div class="flex">
                                    <p class="font-40">New Challenge</p>
                                    <div class="company-mv-btn">view more</div>
                                </div>
                            </div>
                        </div>

                        <div class="change-four">
                            <div class="change-flex">
                                <p class="font-31 vertical-text-right animate-text-before">カーボオンニュートラル</p>
                                <p class="font-22 vertical-text-right animate-text-before">
                                    二酸化炭素・排出規制に対応した<br />
                                    システムの導入とHP上での公表
                                </p>
                                <div class="font-80 font-reduce vertical-text-right animate-text-before">環境対策</div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="change-six hover-large">
                    <a href="<?php echo home_url(); ?>/company/safety" class="zoom-in color-change">
                        <p class="font-50">安心安全への取り組み</p>
                        <p class="font-24">安全な運行に関する積極的な安全装備の採用</p>
                        <div class="company-mv-btn">view more</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- mv end -->
    <!-- company header -->
    <?php get_template_part('template-parts/company-header'); ?>
    <!-- company header end-->
    <main class="about-main company-main mt10-sp" style="display: block;">
        <section class="about-sec bg-gray-container">
            <div class="container">
                <div class="sub-container contact-ttl-sec history-sec new-header-pt">
                    <h2 class="contact-ttl-jp">お知らせ</h2>
                    <p class="contact-ttl-eng">News</p>
                </div>
            </div>
            <div class="news-slider">
                <?php
                $pagede = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 12,
                    'paged' => $pagede,

                );
                ?>
                <div class="three-col-card news-slider-slide">
                    <?php
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                    ?>

                    <a href="<?php the_permalink(); ?>">
                        <ul>
                            <li class="card-img">
                                <?php echo get_the_post_thumbnail(); ?>
                            </li>
                            <li class="white-bg-card">
                                <p class="pb10 match"><?php
                                                            $string = get_the_title();
                                                            $start = 0;
                                                            $length = 41;
                                                            $character_count = mb_strlen($string, "UTF-8");
                                                            $sub_string = mb_substr($string, $start, $length, "UTF-8");
                                                            if ($character_count >= 41) {
                                                                echo $sub_string . "...";
                                                            } else {
                                                                echo $sub_string;
                                                            }

                                                            ?></p>
                                <div class="see-more-link">
                                    <span><?php echo get_the_date("Y" . "." . "m" . "." . "d") ?></span>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/company-common/see_more_btn.png"
                                        alt="最見るの画像" />
                                </div>
                            </li>
                        </ul>
                    </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="container contact-form txt-center">
                <a href="<?php echo home_url(); ?>/news/" class="news-button h-green">
                    <span class="msg-btn">お知らせ一覧を見る</span>
                </a>
            </div>
        </section>
    </main>
    <?php
    get_footer();