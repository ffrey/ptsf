<td colspan="4">
  <?php echo __('%%td_folder%% - %%name%% - %%ct_assets%% - %%title%%', array('%%td_folder%%' => get_partial('lyMediaFolder/td_folder', array('type' => 'list', 'ly_media_folder' => $ly_media_folder)), '%%name%%' => $ly_media_folder->getName(), '%%ct_assets%%' => get_partial('lyMediaFolder/ct_assets', array('type' => 'list', 'ly_media_folder' => $ly_media_folder)), '%%title%%' => $ly_media_folder->getTitle()), 'messages') ?>
</td>
