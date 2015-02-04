<?php

class Malabardesign_Module_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction(){
		
		
		/*$this->loadLayout();
		$this->renderLayout();*/
		
		$module = Mage::getModel("module/tbmodule");
		echo get_class($module);
		$params = $this->getRequest()->getParams();
		$module->load($params["id"]);
		$data = $module->getData();
		var_dump($datas);
		
	}
	
	public function createModuleAction(){
		$module = Mage::getModel("module/tbmodule");
		$module->setModuleTitle("New title")->setModulePost("New message");
		$module->save();
		echo "ok";
	}
	
	public function deleteModuleAction(){
		$module = Mage::getModel("module/tbmodule");
		$params = $this->getRequest()->getParams();
		$module->load($params["id"]);
		$module->delete();
		echo "deleted";
		
	}
	
	public function afficheAllAction(){
		$modules = Mage::getModel("module/tbmodule")->getCollection();
		foreach($modules as $m){
			echo $m->getModuleTitle()."<br>";
		}
		
	}
}
