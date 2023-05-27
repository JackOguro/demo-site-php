<?php get_header();?>
  <main>
    <!-- トップセクション -->
    <section class="top">
      <div class="top-img top-img-news-detail">
        <h1>News-detail<span>Learn detail article</span></h1>
      </div>
      <div class="top-img-back"></div>
    </section>

    <!-- スクロールダウン -->
    <div class="scrolldawn-lower-part">
      <h1>Scroll</h1>
    </div>

    <!-- ニュースディテールセクション -->
    <section class="news-detail">
      <div class="news-detail-block">
        <p class="news-detail-ttl"><?php the_time('Y.m.d');?><span><?php the_title();?></span></p>
        <div class="news-detail-img">
          <?php the_post_thumbnail();?>
        </div>
        <!-- <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュースディテール画像"> -->
        <p class="news-detail-txt">
          仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
          仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
          仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
          仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
          仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
          仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        </p>
        <ul>
          <li>
            <?php if (get_previous_post()):?>
            <?php previous_post_link('%link', '＜　前の記事');?>
            <?php endif; ?>
          </li>
          <li>
            <a href="<?php echo get_permalink(get_page_by_path('news')->ID);?>">記事一覧</a>
          </li>
          <li>
            <?php if (get_next_post()):?>
            <?php next_post_link('%link', '次の記事　＞');?>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </section>
  </main>
<?php get_footer()?>