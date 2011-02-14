<?php

/**
 * BaselyMediaAsset
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $folder_id
 * @property string $filename
 * @property string $title
 * @property clob $description
 * @property string $author
 * @property string $copyright
 * @property string $type
 * @property integer $filesize
 * @property lyMediaFolder $Folder
 * 
 * @method integer       getId()          Returns the current record's "id" value
 * @method integer       getFolderId()    Returns the current record's "folder_id" value
 * @method string        getFilename()    Returns the current record's "filename" value
 * @method string        getTitle()       Returns the current record's "title" value
 * @method clob          getDescription() Returns the current record's "description" value
 * @method string        getAuthor()      Returns the current record's "author" value
 * @method string        getCopyright()   Returns the current record's "copyright" value
 * @method string        getType()        Returns the current record's "type" value
 * @method integer       getFilesize()    Returns the current record's "filesize" value
 * @method lyMediaFolder getFolder()      Returns the current record's "Folder" value
 * @method lyMediaAsset  setId()          Sets the current record's "id" value
 * @method lyMediaAsset  setFolderId()    Sets the current record's "folder_id" value
 * @method lyMediaAsset  setFilename()    Sets the current record's "filename" value
 * @method lyMediaAsset  setTitle()       Sets the current record's "title" value
 * @method lyMediaAsset  setDescription() Sets the current record's "description" value
 * @method lyMediaAsset  setAuthor()      Sets the current record's "author" value
 * @method lyMediaAsset  setCopyright()   Sets the current record's "copyright" value
 * @method lyMediaAsset  setType()        Sets the current record's "type" value
 * @method lyMediaAsset  setFilesize()    Sets the current record's "filesize" value
 * @method lyMediaAsset  setFolder()      Sets the current record's "Folder" value
 * 
 * @package    ptsf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaselyMediaAsset extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ly_media_asset');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('folder_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('filename', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('author', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('copyright', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('type', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
        $this->hasColumn('filesize', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('lyMediaFolder as Folder', array(
             'local' => 'folder_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}