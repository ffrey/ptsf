<td colspan="4">
  <?php echo __('%%td_image%% - %%filename%% - %%title%% - %%created_at%%', array('%%td_image%%' => get_partial('lyMediaAsset/td_image', array('type' => 'list', 'ly_media_asset' => $ly_media_asset)), '%%filename%%' => $ly_media_asset->getFilename(), '%%title%%' => $ly_media_asset->getTitle(), '%%created_at%%' => false !== strtotime($ly_media_asset->getCreatedAt()) ? format_date($ly_media_asset->getCreatedAt(), "dd MMM yyy HH:mm") : '&nbsp;'), 'messages') ?>
</td>
