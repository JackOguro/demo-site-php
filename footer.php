    <footer>
      <div class="footer-block">
        <a href="<?php echo home_url();?>" class="footer-img">
          <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="ロゴ画像">
        </a>
        <p id="page-top"><a href="#">Page Top</a></p>
        <!-- <ul>
          <li><a href="">TOP</a></li>
          <li><a href="html/service.html">SERVICE</a></li>
          <li><a href="html/about.html">ABOUT</a></li>
        </ul> -->
        <?php 
          $args = array(
        'menu' => 'footer_menu_1', 
        'menu_class' => '', 
        'container' => false,
         );
         // カスタムメニューを表示
         wp_nav_menu($args);
        ?>

        <!-- <ul> 
          <li><a href="html/news.html">NEWS</a></li>
          <li><a href="html/contact.html">CONTACT</a></li>
        </ul>  -->
        <?php 
          $args = array(
        'menu' => 'footer_menu_2', 
        'menu_class' => '',
        'container' => false, 
         );
         // カスタムメニューを表示
         wp_nav_menu($args);
        ?>
      </div>
      <h1>US or someone else</h1>
      <p>©2022 WithCode INC. All Right Reserved</p>
    </footer>
  </div>
  <?php wp_footer(); ?>
  <!-- jqueryファイルの読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- slickファイルの読み込み -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- jsファイルの読み込み -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/hamburger.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/accordion.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/scroll.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/slick.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/loading.js"></script>
  </body>
</body>
</html>