<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tisma
 */
  global $get_template_directory_uri;
?>

  <footer class="footer">
    <div class="container text-center text-md-start">
      <div class="footer__row row align-items-center">
        <div class="col-md-auto">
          <a class="footer__logo" href="#">
            <img loading="lazy" src="<?php echo get_field('лого_картинка', 'option');?>" alt=""/>
            <span>
                <?php echo get_field('лого_текст', 'option');?>
            </span>
          </a>
        </div>
        <div class="col-md-auto">
          <div class="footer__txt">
            <?php echo the_field('текст15', 'option'); ?>
          </div>
        </div>
          <div class="col-md">
                <div class="soc">
                  <?php if( have_rows('соц_сети', 'option') ): while( have_rows('соц_сети', 'option') ): the_row(); ?>
                        <a href="<?php echo get_sub_field('ссылка', 'option');?>" class="soc__item" target="_blank">
                            <svg class="icon icon-<?php echo get_sub_field('название_иконки', 'option');?> ">
                                <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#<?php echo get_sub_field('название_иконки', 'option');?>"></use>
                            </svg>
                        </a>
                  <?php endwhile; endif;  ?>
                </div>
          </div>
        <div class="footer__policy-col col-md-auto">

            <a href="<?php echo the_field('ссилка_политики15', 'option'); ?>" target="_blank">Политика конфиденциальности</a>
        </div>
          <div class="col-md-auto">
              <div class="soc">
                  <a href="#" class="soc__item"  >
                          <svg class="icon icon-arrow-left ">
                              <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-left"></use>
                          </svg>
                      </a>
              </div>
          </div>
      </div>
    </div>
  </footer>
  </div>
  <!--  start modals-->
  <div class="modal-win" id="modal-calc" style="display: none">
    <div class="modal-win__row row gy-4">
      <div class="modal-win__col modal-win__col--title col-lg-auto text-center text-lg-start">
        <div class="modal-win__title-bl">
          <div class="modal-win__title">
            <?php echo get_field('заголовок_м1', 'option'); ?>
          </div>
          <?php echo get_field('описание_м1', 'option'); ?>
        </div>
        <div class="form-wrap">
          <!--form 1-->
          <?php echo do_shortcode('[contact-form-7 id="5" title="Модалка1(Рассчитайте стоимость проекта за 1 минуту)"]'); ?>
          <!--end form 1-->
          <div class="form-wrap__policy">
              Нажимая на кнопку вы соглашаетесь с
              <a href="<?php echo the_field('ссилка_политики15', 'option'); ?>" target="_blank">
                  политикой конфиденциальности
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg">
        <!-- picture-->
        <picture class="modal-win__paper">
          <source type="image/webp" srcset="<?php echo $get_template_directory_uri ?>/public/img/@2x/webp/modal-paper-1.webp"/>
          <img src="<?php echo $get_template_directory_uri ?>/public/img/@2x/modal-paper-1.png" alt="" loading="lazy"/>
        </picture>
        <!-- /picture-->
      </div>
    </div>
  </div>
  <!-- #modal-calc-->
  <div class="modal-win" id="modal-call" style="display: none">
    <div class="modal-win__row row gy-4">
      <div class="modal-win__col modal-win__col--title col-lg-auto text-center text-lg-start">
        <div class="modal-win__title-bl">
          <div class="modal-win__title">
            <?php echo get_field('заголовок_м2', 'option'); ?>
          </div>
          <?php echo get_field('описание_м2', 'option'); ?>
        </div>
        <div class="form-wrap">
          <?php echo do_shortcode('[contact-form-7 id="5" title="Модалка1(Рассчитайте стоимость проекта за 1 минуту)"]'); ?>
          <div class="form-wrap__policy">
              Нажимая на кнопку вы соглашаетесь с
              <a href="<?php echo the_field('ссилка_политики15', 'option'); ?>" target="_blank">
                  политикой конфиденциальности
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg">
        <!-- picture-->
        <picture class="modal-win__paper">
          <source type="image/webp" srcset="<?php echo $get_template_directory_uri ?>/public/img/@2x/webp/modal-paper-2.webp"/>
          <img src="<?php echo $get_template_directory_uri ?>/public/img/@2x/modal-paper-2.png" alt="" loading="lazy"/>
        </picture>
        <!-- /picture-->
      </div>
    </div>
  </div>
  <!---->

  <div class="modal-win" id="modal-price" style="display: none">
    <div class="modal-win__row row gy-4">
      <div class="modal-win__col modal-win__col--title col-lg-auto text-center text-lg-start">
        <div class="modal-win__title-bl">
          <div class="modal-win__title">
            <?php echo get_field('заголовок_м3', 'option'); ?>
          </div>
          <?php echo get_field('описание_м3', 'option'); ?>
        </div>
        <div class="form-wrap">
          <?php echo do_shortcode('[contact-form-7 id="255" title="Модалка3(Узнать стоимость такого ППР)"]'); ?>
          <div class="form-wrap__policy">
              Нажимая на кнопку вы соглашаетесь с
              <a href="<?php echo the_field('ссилка_политики15', 'option'); ?>" target="_blank">
                  политикой конфиденциальности
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg">
        <!-- picture-->
        <picture class="modal-win__paper ">
          <source type="image/webp" srcset="<?php echo $get_template_directory_uri ?>/public/img/@2x/webp/modal-paper-3.webp"/>
          <img src="<?php echo $get_template_directory_uri ?>/public/img/@2x/modal-paper-3.png" alt="" loading="lazy"/>
        </picture>
        <!-- /picture-->
      </div>
    </div>
  </div>
  <div class="modal-win" id="modal-price2" style="display: none">
    <div class="modal-win__row row gy-4">
      <div class="modal-win__col modal-win__col--title col-lg-auto text-center text-lg-start">
        <div class="modal-win__title-bl">
          <div class="modal-win__title">
	          <?php echo get_field('заголовок_м10', 'option'); ?>
          </div>
	        <?php echo get_field('описание_м10', 'option'); ?>
        </div>
        <div class="form-wrap">
          <?php echo do_shortcode('[contact-form-7 id="255" title="Модалка3(Узнать стоимость такого ППР)"]'); ?>
          <div class="form-wrap__policy">
              Нажимая на кнопку вы соглашаетесь с
              <a href="<?php echo the_field('ссилка_политики15', 'option'); ?>" target="_blank">
                  политикой конфиденциальности
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg">
        <!-- picture-->
        <picture class="modal-win__paper ">
          <source type="image/webp" srcset="<?php echo $get_template_directory_uri ?>/public/img/@2x/webp/modal-paper-3.webp"/>
          <img src="<?php echo $get_template_directory_uri ?>/public/img/@2x/modal-paper-3.png" alt="" loading="lazy"/>
        </picture>
        <!-- /picture-->
      </div>
    </div>
  </div>

  <!---->
  <div class="m-thanks modal-win" id="modal-thanks" style="display: none">
    <div class="text-center">
      <div class="m-thanks__title">
        <?php echo get_field('заголовок_м4', 'option'); ?>
      </div>
      <div class="m-thanks__descr">
        <?php echo get_field('описание_м4', 'option'); ?>
      </div>
      <button class="m-thanks__close-btn modal-close-js" type="button">Закрыть и перейти на сайт
      </button>
    </div>
  </div>
  <!-- end modals-->

<?php wp_footer(); ?>

<!-- jivosite -->
<script src="//code.jivosite.com/widget/p2PpkrwbPR" async></script>
<!-- /jivosite -->

  </body>
</html>
