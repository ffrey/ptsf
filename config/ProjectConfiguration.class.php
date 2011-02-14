<?php

require_once 'C://wamp//lib//sf14//lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfJqueryReloadedPlugin');
    $this->enablePlugins('sfAdminDashPlugin');
    $this->enablePlugins('sfMediaBrowserPlugin');
    $this->enablePlugins('lyMediaManagerPlugin');
    $this->enablePlugins('sfThumbnailPlugin');
  }
}
