<?php

require_once 'CRM/Core/Form.php';


/**
 * Form controller class
 *
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC43/QuickForm+Reference
 */
class CRM_Roomentity_Form_RoomEntityconfirm extends CRM_Core_Form {
  function buildQuickForm() { 
$this->addButtons(array(
      array(
        'type' => 'submit',
        'name' => ts('Okay'),
        'isDefault' => TRUE,
      ),
    ));

$this->assign('confMsg','Room details has been added successfully');    
$this->assign('title','Room Details Confirmation');
parent::buildQuickForm();
  }

  function postProcess() {
    $path = 'civicrm/roomentity';
    $url = CRM_Utils_System::url($path);
    CRM_Utils_System::redirect($url);
    parent::postProcess();
  }

}