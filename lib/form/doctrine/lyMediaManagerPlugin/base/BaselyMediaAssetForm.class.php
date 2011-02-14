<?php

/**
 * lyMediaAsset form base class.
 *
 * @method lyMediaAsset getObject() Returns the current form's model object
 *
 * @package    ptsf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaselyMediaAssetForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'folder_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Folder'), 'add_empty' => false)),
      'filename'    => new sfWidgetFormInputText(),
      'title'       => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'author'      => new sfWidgetFormInputText(),
      'copyright'   => new sfWidgetFormInputText(),
      'type'        => new sfWidgetFormInputText(),
      'filesize'    => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'folder_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Folder'))),
      'filename'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
      'author'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'copyright'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'type'        => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'filesize'    => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('ly_media_asset[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'lyMediaAsset';
  }

}
