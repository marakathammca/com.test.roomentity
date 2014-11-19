<?php

require_once 'CRM/Core/Form.php';
require_once 'CRM/Core/Config.php';
require_once 'CRM/Utils/System.php';

/**
 * Form controller class
 *
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC43/QuickForm+Reference
 */
class CRM_Roomentity_Form_RoomEntity extends CRM_Core_Form {
  function buildQuickForm() {

    // add form elements
    $this->add(
      'text', // field type
      'room_label', // field name
      'Room Label', // field label
      true // is required
    );
    $this->add(
      'text', // field type
      'room_number', // field name
      'Room Number' // field label
    );
   $this->add(
      'text', // field type
      'room_floor', // field name
      'Room Floor' // field label
    );
   $this->add(
      'text', // field type
      'room_extension', // field name
      'Room Extension' // field label
    );
    $this->addButtons(array(
      array(
        'type' => 'submit',
        'name' => ts('Submit'),
        'isDefault' => TRUE,
      ),
    ));
 $this->assign('title','Room Details');
 $this->assign('label','Enter the room details');
    parent::buildQuickForm();
  }

  function postProcess() {
    $this->createRoom();
    $path = 'civicrm/roomentityconfirmation';
    $url = CRM_Utils_System::url($path);
    CRM_Utils_System::redirect($url);
    parent::postProcess();
  }

/**
   * This function is used to add the rules (mainly global rules) for form.
   * All local rules are added near the element
   *
   * @return void
   * @access public
   * @see room label
   */
  function addRules() {
$this->addFormRule(array('CRM_Roomentity_Form_RoomEntity', 'checkRules'));
          return;
    }

   /**
   * Here's our custom validation callback
   */
 static function checkRules($values) {
    $errors = array();
    if ($values['room_label'] == '') {
      $errors['room_label'] = ts('Please enter the room label');
    }
    return empty($errors) ? TRUE : $errors;
  }

/**
  * Function used to create a new room details record in the      tabele
**/
function createRoom(){
$values = $this->getVar("_submitValues");
$roomlabel=$values['room_label'];
$roomno=$values['room_number'];
$roomfloor=$values['room_floor'];
$roomext=$values['room_extension'];

$sql = "INSERT INTO civicrm_room ( label, room_no,floor,ext ) VALUES  ('$roomlabel','$roomno','$roomfloor','$roomext')";
$result =& CRM_Core_DAO::executeQuery($sql);
return $result;
}
}