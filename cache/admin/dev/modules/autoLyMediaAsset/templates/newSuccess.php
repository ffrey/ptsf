<?php use_helper('I18N', 'Date') ?>
<?php include_partial('lyMediaAsset/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New media', array(), 'messages') ?></h1>

  <?php include_partial('lyMediaAsset/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('lyMediaAsset/form_header', array('ly_media_asset' => $ly_media_asset, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('lyMediaAsset/form', array('ly_media_asset' => $ly_media_asset, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('lyMediaAsset/form_footer', array('ly_media_asset' => $ly_media_asset, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
