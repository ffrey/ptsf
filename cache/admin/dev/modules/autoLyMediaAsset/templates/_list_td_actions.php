<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($ly_media_asset, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($ly_media_asset, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
    <li class="sf_admin_action_download">
      <?php echo link_to(__('Download', array(), 'messages'), 'lyMediaAsset/download?id='.$ly_media_asset->getId(), array()) ?>
    </li>
  </ul>
</td>
