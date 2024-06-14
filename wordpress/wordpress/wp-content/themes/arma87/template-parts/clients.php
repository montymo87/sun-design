<?php
$section = get_field('clients');

$title = $section['title'];
$descr = $section['descr'];
$list = $section['list'];

if (!empty($section)) { ?>

  <section class="section clients js-clients-wrapper">
    <div class="clients__in">
      <div class="clients__heading">
        <?php if (!empty($title)) { ?>
          <h2 class="clients__title"><?php echo $title ?></h2>
        <?php } ?>
        <?php if (!empty($list)) { ?>
          <div class="clients__slider_nav">
            <button class="slider_navigation slider_navigation--prev_mod js-slider-navigation-prev" type="button" aria-label="Prev slide">
              <svg class="icon icon_arrow icon--size_mod icon--slider">
                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite/sprite.svg#arrow"></use>
              </svg>
            </button>
            <button class="slider_navigation slider_navigation--next_mod js-slider-navigation-next" type="button" aria-label="Next slide">
              <svg class="icon icon_arrow icon--size_mod icon--slider">
                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite/sprite.svg#arrow"></use>
              </svg>
            </button>
          </div>
        <?php } ?>
      </div>
      <?php if (!empty($list)) { ?>
        <div class="clients__slider_w">
          <div class="clients__list js-clients-slider">
            <?php foreach ($list as $key => $item) {
              $descr_item = $item['descr'];
              $name_item = $item['name'];
              $post_item = $item['post'];
              $image_item = $item['image'];
            ?>
              <div class="clients__item">
                <div class="clients__row">
                  <?php if (!empty($image_item)) { ?>
                    <div class="clients__col clients__col--img">
                      <picture class="clients__img_w">
                        <?php echo wp_get_attachment_image($image_item, 'full', false, array('loading' => 'lazy')); ?>
                      </picture>
                    </div>
                  <?php } ?>
                  <?php if (!empty($descr_item)) { ?>
                    <div class="clients__col clients__col--info">
                      <div class="clients__descr"><?php echo $descr_item ?></div>
                      <?php if (!empty($name_item)) { ?>
                        <div class="clients__name"><?php echo $name_item ?></div>
                      <?php } ?>
                      <?php if (!empty($post_item)) { ?>
                        <div class="clients__post"><?php echo $post_item ?></div>
                      <?php } ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="clients__dots js-clients-slider-dots"></div>
        </div>
      <?php } ?>
    </div>
  </section>

<?php
}
?>