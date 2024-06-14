<?php
$section = get_field('contact');

$title = $section['title'];
$mail = $section['mail'];
$address = $section['address'];
$form = do_shortcode($section['form']);

if (!empty($section)) { ?>

  <section class="section contact">
    <div class="contact__in">
      <div class="contact__row">
        <div class="contact__col contact__col--info">
          <?php if (!empty($title)) { ?>
            <h2 class="contact__title"><?php echo $title ?></h2>
          <?php } ?>
          <?php if ($mail || $address) { ?>
            <div class="contact__info">
              <?php if (!empty($mail)) { ?>
                <a class="contact__mail" href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a>
              <?php } ?>

              <?php if (!empty($address)) { ?>
                <div class="contact__address"><?php echo $address ?></div>
              <?php } ?>

            </div>
          <?php } ?>

        </div>
        <?php if (!empty($form)) { ?>
          <div class="contact__col contact__col--form">
            <div class="contact__form_w">
              <?php echo $form ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

<?php
}
?>