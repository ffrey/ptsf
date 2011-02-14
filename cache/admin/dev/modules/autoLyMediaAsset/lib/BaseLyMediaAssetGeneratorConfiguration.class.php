<?php

/**
 * lyMediaAsset module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage lyMediaAsset
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseLyMediaAssetGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return array(  '_edit' => NULL,  '_delete' => NULL,  'download' =>   array(    'action' => 'download',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  'delete' => NULL,  'generatethumbnails' =>   array(    'label' => 'Generate thumbnails',  ),);
  }

  public function getListParams()
  {
    return '%%_td_image%% - %%filename%% - %%title%% - %%created_at%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Media Manager';
  }

  public function getEditTitle()
  {
    return 'Edit LyMediaAsset';
  }

  public function getNewTitle()
  {
    return 'New media';
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
    return array(  'NONE' =>   array(    0 => '_field_path',    1 => 'folder_id',    2 => 'filename',    3 => 'en',    4 => 'fr',    5 => 'author',    6 => 'copyright',  ),  'Asset' =>   array(    0 => '_field_image',  ),);
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => '_td_image',  1 => 'filename',  2 => 'title',  3 => 'created_at',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'folder_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'filename' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'author' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'copyright' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'filesize' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'folder_id' => array(),
      'filename' => array(),
      'title' => array(),
      'description' => array(),
      'author' => array(),
      'copyright' => array(),
      'type' => array(),
      'filesize' => array(),
      'created_at' => array(  'label' => 'Date',  'date_format' => 'dd MMM yyy HH:mm',),
      'updated_at' => array(),
      'td_image' => array(  'label' => false,),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'folder_id' => array(),
      'filename' => array(),
      'title' => array(),
      'description' => array(),
      'author' => array(),
      'copyright' => array(),
      'type' => array(),
      'filesize' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'folder_id' => array(),
      'filename' => array(),
      'title' => array(),
      'description' => array(),
      'author' => array(),
      'copyright' => array(),
      'type' => array(),
      'filesize' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'folder_id' => array(),
      'filename' => array(),
      'title' => array(),
      'description' => array(),
      'author' => array(),
      'copyright' => array(),
      'type' => array(),
      'filesize' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'folder_id' => array(),
      'filename' => array(),
      'title' => array(),
      'description' => array(),
      'author' => array(),
      'copyright' => array(),
      'type' => array(),
      'filesize' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'lyMediaAssetForm';
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
    return 'lyMediaAssetFormFilter';
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
    return 'retrieveAssetList';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
