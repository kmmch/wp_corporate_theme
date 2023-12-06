<?php
if(!is_front_page(  )):
?>
                </div>
              </div>
            </main>
          </div>
        </div>
<?php
endif;
?>
        <footer class="footer" id="footer">
          <div class="footerContents">
            <div class="footerContents-contact">
              <div class="enterprise-logo">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/svg/logo-footer.svg" alt="PACIFIC MALL DEVELOPMENT" />
              </div>
              <div class="enterprise-detail">
                <p class="name">Biz Tech株式会社</p>
                <p class="address">
                  東京都千代田区大手町1-1-10<br />
                  三橋ビルディング18F 
                </p>
              </div>
            </div>
            <div class="footerContents-sitemap">
              <nav class="footer-nav">
<?php 
wp_nav_menu(
  array(
    'theme_location' => 'place_footer',
    'container' => false, 
  )
); 
?>
              </nav>
            </div>
            <ul class="sns-navi">
              <li class="twitter">
                <a href="https://twitter.com/mochiken__code" target="_blank"></a>
              </li>
            </ul>
          </div>
          <p class="copyright">
            <small class="copyright-text">&#169; 2023 Biz Tech CO., LTD.</small>
          </p>
        </footer>
      </div><!-- /.container -->
    <?php wp_footer(); ?>
  </body>
</html>
