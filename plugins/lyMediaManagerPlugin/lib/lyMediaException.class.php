<?php
/*
 * This file is part of the lyMediaManagerPlugin package.
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * lyMediaException
 * Model exceptions for lyMediaManagerPlugin
 * Taken from sfAssetException class of sfAssetsLibraryPlugin
 * 
 * @author Magénération
 */
class lyMediaException extends sfException
{
  protected $message_params = array();
  
  public function __construct($message = null, $message_params = array(), $code = 0)
  {
    $this->setMessageParams($message_params);
    parent::__construct($message, $code);
  }
  
  public function setMessageParams($message_params)
  {
    $this->message_params = $message_params;
  }
  
  public function getMessageParams()
  {
    return $this->message_params;
  }
}
