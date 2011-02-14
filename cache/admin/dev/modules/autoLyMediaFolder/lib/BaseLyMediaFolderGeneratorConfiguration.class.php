<?php

/**
 * lyMediaFolder module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage lyMediaFolder
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseLyMediaFolderGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,  'upload' =>   array(    'action' => 'upload',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%_td_folder%% - %%name%% - %%_ct_assets%% - %%title%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Folders';
  }

  public function getEditTitle()
  {
    return 'Edit LyMediaFolder';
  }

  public function getNewTitle()
  {
    return 'New LyMediaFolder';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array(  0 => '_field_path',  1 => 'parent_id',  2 => 'name',  3 => 'title',  4 => 'description',);
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => '_td_folder',  1 => 'name',  2 => '_ct_assets',  3 => 'title',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'relative_path' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'lft' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'rgt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'level' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'title' => array(),
      'description' => array(),
      'relative_path' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'lft' => array(),
      'rgt' => array(),
      'level' => array(),
      'ct_assets' => array(  'label' => 'Media',),
      'folder' => array(  'label' => false,),
      'td_folder' => array(  'label' => false,),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'title' => array(),
      'description' => array(),
      'relative_path' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'lft' => array(),
      'rgt' => array(),
      'level' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'title' => array(),
      'description' => array(),
      'relative_path' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'lft' => array(),
      'rgt' => array(),
      'level' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'title' => array(),
      'description' => array(),
      'relative_path' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'lft' => array(),
      'rgt' => array(),
      'level' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'title' => array(),
      'description' => array(),
      'relative_path' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'lft' => array(),
      'rgt' => array(),
      'level' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'lyMediaFolderForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'lyMediaFolderFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return 'retrieveFolderList';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
