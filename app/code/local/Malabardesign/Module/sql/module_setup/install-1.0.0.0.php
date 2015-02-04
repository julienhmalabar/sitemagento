<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    
 * @package     
 * @copyright   
 * @license    
 */

$installer = $this;
$installer->startSetup();

/* create table 'module' */
$conn = $installer->getConnection()
	->newTable($installer->getTable('module/tbmodule'))
	->addColumn('module_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
			'identity'  => true,
			'unsigned'  => true,
			'nullable'  => false,
			'primary'   => true,
	), 'Formation Id')
	->addColumn('module_title', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
	), 'Module title')
	->addColumn('module_post', Varien_Db_Ddl_Table::TYPE_TEXT, 800, array(
	), 'Module texte')
	->addColumn('date_posted', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
			'nullable'  => false,
	), 'Date posted');
	$installer->getConnection()->createTable($conn);	
	
$installer->endSetup();

echo get_class($this);

?>