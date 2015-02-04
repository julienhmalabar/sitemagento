<?php 
class Malabardesign_Module_Model_Resource_Module_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Initialize collection
     *
     */
    public function _construct()
    {
        $this->_init('module/module');
    }
}
?>