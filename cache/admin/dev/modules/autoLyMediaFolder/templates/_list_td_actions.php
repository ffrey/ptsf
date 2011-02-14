<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($ly_media_folder, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($ly_media_folder, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
    <li class="sf_admin_action_upload">
      <?php echo link_to(__('Upload', array(), 'messages'), 'lyMediaFolder/upload?id='.$ly_media_folder->getId(), array()) ?>
    </li>
  </ul>
</td>
