<?php 

class Malabardesign_Module_Model_Resource_Module extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialize resource
     *
     */
    protected function _construct()
    {
        $this->_init('module/module', 'module_id');
    }
    
}
    
?>