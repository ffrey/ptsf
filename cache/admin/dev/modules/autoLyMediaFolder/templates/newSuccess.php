<?php use_helper('I18N', 'Date') ?>
<?php include_partial('lyMediaFolder/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New LyMediaFolder', array(), 'messages') ?></h1>

  <?php include_partial('lyMediaFolder/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('lyMediaFolder/form_header', array('ly_media_folder' => $ly_media_folder, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('lyMediaFolder/form', array('ly_media_folder' => $ly_media_folder, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('lyMediaFolder/form_footer', array('ly_media_folder' => $ly_media_folder, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
