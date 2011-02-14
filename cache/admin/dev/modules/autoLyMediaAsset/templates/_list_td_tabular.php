<td class="sf_admin_text sf_admin_list_td_td_image">
  <?php echo get_partial('lyMediaAsset/td_image', array('type' => 'list', 'ly_media_asset' => $ly_media_asset)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_filename">
  <?php echo $ly_media_asset->getFilename() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $ly_media_asset->getTitle() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($ly_media_asset->getCreatedAt()) ? format_date($ly_media_asset->getCreatedAt(), "dd MMM yyy HH:mm") : '&nbsp;' ?>
</td>
