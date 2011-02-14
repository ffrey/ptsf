<td class="sf_admin_text sf_admin_list_td_td_folder">
  <?php echo get_partial('lyMediaFolder/td_folder', array('type' => 'list', 'ly_media_folder' => $ly_media_folder)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $ly_media_folder->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ct_assets">
  <?php echo get_partial('lyMediaFolder/ct_assets', array('type' => 'list', 'ly_media_folder' => $ly_media_folder)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $ly_media_folder->getTitle() ?>
</td>
