<?php

/**
 * lyMediaFolderTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class lyMediaFolderTable extends PluginlyMediaFolderTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object lyMediaFolderTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('lyMediaFolder');
    }
}