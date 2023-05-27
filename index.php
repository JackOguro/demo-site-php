  <?php get_header();?> 
    <main class="index-main">
      <!-- トップセクション -->
      <section class="index-top">
        <ul class="slideShow">
          <li class="slide slide-img1"></li>
          <li class="slide slide-img2"></li>
          <li class="slide slide-img3"></li>
          <li class="slide slide-img4"></li>
        </ul>
        <h1>US or someone else<span>We are professional</span></h1>
      </section>
  
      <!-- スクロールダウン -->
      <div class="scrolldawn">
        <h1>Scroll</h1>
      </div>
  
      <!-- サービスセクション -->
      <section class="index-service">
        <!-- 背景四角形 -->
        <div class="square1"></div>
        <div class="square2"></div>
        <div class="square3 "></div>
        <div class="index-service-block">
          <!-- サービス左側 -->
          <div class="index-service-left">
            <h1 class="section-ttl fadeRightTrigger">SERVICE</h1>
            <p class="section-desc fadeRightTrigger">お客様の課題に360度対応できる<br>圧倒的な技術力</p>
            <p class="section-txt">私たちはこれまで100社以上と取引を行ってきました。</p>
            <p class="section-txt">そこから得られた経験と実績を基にお客様1人1人に合った適切なITサービスの提供を行います。</p>
            <p class="section-txt">私たちの持つ技術でお客様のあらゆるIT課題を迅速に解決します。</p>
          </div>
          <!-- サービス右側 -->
          <div class="index-service-right">
            <div class="index-service-logo index-consulting fadeInTrigger">
              <img src="<?php echo get_template_directory_uri()?>/img/service3.png" alt="コンサルティング画像">
              <h1>Consulting</h1>
            </div>
            <div class="index-service-logo index-video fadeInTrigger">
              <img src="<?php echo get_template_directory_uri()?>/img/service.png" alt="動画編集画像">
              <h1>Video editing</h1>
            </div>
            <div class="index-service-logo index-web fadeInTrigger">
              <img src="<?php echo get_template_directory_uri()?>/img/service2.png" alt="Web制作画像">
              <h1>Web production</h1>
            </div>
          </div>
        </div>
        <!-- ボタン -->
        <a href="<?php echo get_permalink(get_page_by_path('service')->ID); ?>">
          <div class="btn-index">
            <p>View More</p>
            <svg width="48px" height="48px">
              <circle cx="24" cy="24" r="22"/>
            </svg>
          </div>
        </a>
      </section>
  
      <!-- アバウトセクション -->
      <section class="index-about">
        <!-- 背景四角形 -->
        <div class="square4"></div>
        <div class="square5"></div>
        <!-- アバウトテキスト -->
        <div class="index-about-txt">
          <h1 class="section-ttl fadeLeftTrigger">ABOUT</h1>
          <p class="section-desc fadeLeftTrigger">技術で未来を明るく照らす会社</p>
        </div>
        <div class="index-about-imgs">
          <!-- カンパニー -->
          <a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>" class="index-about-img fadeInTrigger">
            <img src="<?php echo get_template_directory_uri()?>/img/about.png" alt="会社画像">
            <h1>Company</h1>
          </a>
          <!-- メンバー -->
          <a href="" class="index-about-img fadeInTrigger">
            <img src="<?php echo get_template_directory_uri()?>/img/about2.png" alt="メンバー画像">
            <h1>Member</h1>
          </a>
          <!-- アクセス -->
          <a href="" class="index-about-img fadeInTrigger">
            <img src="<?php echo get_template_directory_uri()?>/img/about3.png" alt="アクセス画像">
            <h1>Access</h1>
          </a>
        </div>
      </section>
  
      <!-- ニュースセクション -->
      <section class="index-news">
        <!-- 背景四角形 -->
        <div class="square6"></div>
        <div class="square7"></div>
        <h1 class="section-ttl fadeRightTrigger">NEWS</h1>
        <ul class="news-items">
        <?php if (have_posts()) :
          while (have_posts()) :
            the_post();?>
          <!-- ニュースアイテム -->
          <li class="news-item fadeUpTrigger">
            <a href="<?php the_permalink();?>">
              <div class="news-item-img">
                <?php the_post_thumbnail();?>
                <!-- <img src="<?php echo get_template_directory_uri()?>/img/news.png" alt="ニュース画像1"> -->
              </div>
              <div class="news-item-txt">
                <p class="news-category"><?php the_category();?></p>
                <p class="news-ttl"><?php the_time('Y.m.d');?><span><?php the_title();?></span></p>
              </div>
            </a>
          </li>
        <?php endwhile; endif; ?>
        </ul>
        <!-- ボタン -->
        <a href="<?php echo get_permalink(get_page_by_path('news')->ID); ?>">
          <div class="btn-index  btn-index-news">
            <p>View ALL</p>
            <svg width="48px" height="48px">
              <circle cx="24" cy="24" r="22" />
            </svg>
          </div>
        </a>
      </section>
  
      <!-- コンタクトセクション -->
      <section class="index-contact">
        <!-- 背景四角形 -->
        <div class="square8"></div>
        <div class="square9"></div>
        <!-- コンタクトテキスト -->
        <div class="index-contact-txt">
          <h1 class="section-ttl fadeUpTrigger">CONTACT</h1>
          <p class="section-desc fadeUpTrigger">お問い合わせ・ご質問・ご相談は<br>お気軽にお問い合わせください</p>
        </div>
        <!-- ボタン -->
        <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>">
          <div class="btn-index btn-index-contact">
            <p>Contact form</p>
            <svg width="48px" height="48px">
              <circle cx="24" cy="24" r="22" />
            </svg>
          </div>
        </a>
      </section>
    </main>
  <?php get_footer();?>
