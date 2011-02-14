<?php

/**
 * lyMediaFolder module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage lyMediaFolder
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseLyMediaFolderGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'ly_media_folder' : 'ly_media_folder_'.$action;
  }
}
