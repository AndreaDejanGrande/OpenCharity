<div id="page-wrapper" class="container">
  <div id="page" class="container__page">
    <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" class="menu__logo" alt="<?php print t('Home'); ?>" />
        <img src="themes/opencharity/images/logo-mobile.png" class="menu__logo--mobile" alt="<?php print t('Home'); ?>" />
      </a>
      <?php
        endif;
      ?>

      <?php
        print render($page['header']);
      ?>

      <div id="menu" class="menu">
        <a href="./" class="menu-link menu__a">
          <div class="menu__link">
            <font id="menu-font" class="menu__font">ABOUT OPEN CHARITY</font>
          </div>
        </a>
        <a href="./?q=blog" class="menu-link">
          <div class="menu__link">
            <font id="menu-font" class="menu__font">THE BLOG</font>
          </div>
        </a>
        <a href="#groups-container" class="menu-link">
          <div class="menu__link--highlighted">
            <font id="menu-font-blue" class="menu__font--highlighted">JOIN US</font>
          </div>
        </a>
      </div>
    </div>

    <div class="content__main">
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php
          print render($action_links);
        ?>
      </ul>
      <?php
        endif;
      ?>
      <?php
        print render($page['content']);
      ?>
    </div>

    <div id="footer-wrapper" class="container__footer">
      <div id="footer" class="clearfix footer">
        <div class="footer__columns">
          <div class="footer__title">
            <font class="footer__font--title">BLOG</font>
          </div>
          <div class="footer__blog">
            <?php
              print render($page['footer_content']);
            ?>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <?php
          print render($page['footer_copyright']);
        ?>
      </div>
    </div>
  </div>
</div>
