<?php get_header();?>
  <main>
    <!-- トップセクション -->
    <section class="top">
      <div class="top-img top-img-news">
        <h1>NEWS<span>Offer information</span></h1>
      </div>
      <div class="top-img-back"></div>
    </section>
    
    <!-- スクロールダウン -->
    <div class="scrolldawn-lower-part">
      <h1>Scroll</h1>
    </div>

    <!-- ニュースセクション -->
    <section class="news">
      <div class="news-block">
        <!-- ニュースカテゴリー -->
        <div class="news-list">
          <ul>
            <li><a href="">すべて</a></li>
            <li><a href="">お知らせ</a></li>
            <li><a href="">メディア情報</a></li>
            <li><a href="">イベント情報</a></li>
          </ul>
        </div>
        <div class="news-items">
          <?php if (have_posts()) :
          while (have_posts()) :
            the_post();?>
          <!-- ニュースアイテム -->
          <a href="<?php get_permalink();?>" class="news-item fadeUpTrigger">
            <div class="news-item-img">
              <?php the_post_thumbnail();?>
              <!-- <img src="<?php get_template_directory_uri();?>/../img/news.png" alt="ニュース画像1"> -->
            </div>
            <div class="news-item-txt">
              <p class="news-category">お知らせ</p>
              <p class="news-ttl"><?php the_time('Y.m.d');?><span><?php the_title();?></span></p>
            </div>
          </a>
          <?php endwhile; endif; ?>
          <!-- ニュースアイテム 
          <a href="" class="news-item fadeUpTrigger">
            <div class="news-item-img">
              <img src="../img/news3.png" alt="ニュース画像1">
            </div>
            <div class="news-item-txt">
              <p class="news-category">イベント情報</p>
              <p class="news-ttl">2022.01.15<span>WEBイベント開催のお知らせ</span></p>
            </div>
          </a>
          ニュースアイテム
          <a href="" class="news-item fadeUpTrigger">
            <div class="news-item-img">
              <img src="../img/news2.png" alt="ニュース画像1">
            </div>
            <div class="news-item-txt">
              <p class="news-category">お知らせ</p>
              <p class="news-ttl">2022.01.31<span>ブログを更新しました。</span></p>
            </div>
          ニュースアイテム 
          </a> -->
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>