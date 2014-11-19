<?php

require_once 'CRM/Core/Form.php';
require_once 'CRM/Core/DAO.php';


/**
 * Form controller class
 *
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC43/QuickForm+Reference
 */
class CRM_Roomentity_Form_RoomEntitysearch extends CRM_Core_Form {
  function buildQuickForm() { 
	$result=$this->searchRooms();
 	$this->assign( 'result', $result);
  }

  function searchRooms() { 
	$sql = "SELECT label,room_no,floor,ext FROM civicrm_room";
 	$result = array(array());
	$records =&CRM_Core_DAO::executeQuery($sql);
	while($records->fetch()){
		$result[]  = array($records->label,$records->room_no,$records->floor,$records->ext);
	}
	return $result;
  }

}