<?php

class Shopware_Plugins_Backend_MNSEOManager_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
	public function getInfo()
	{
		return array(
			'label' => 'SEO Manager',
			'author' => 'Moritz Naczenski'

		);
	}

	public function install()
	{
		$this->subscribeEvent(
			'Enlight_Controller_Dispatcher_ControllerPath_Backend_SwagSEOManager',
			'getBackendController'
		);

		$this->createMenuItem(array(
			'label' => 'SEO Manager',
			'controller' => 'SwagSEOManager',
			'class' => 'sprite-application-block',
			'action' => 'Index',
			'active' => 1,
			'parent' => $this->Menu()->findOneBy(['label' => 'Marketing'])
		));

		return true;
	}


	public function uninstall()
	{
		return true;
	}

	public function getBackendController(Enlight_Event_EventArgs $args)
	{
		// Register the template directory to not have to provide it
		// in the controller every time
		$this->Application()->Template()->addTemplateDir(
			$this->Path() . 'Views/'
		);

		// Register the models to have access to them in the controller
		$this->registerCustomModels();

		return $this->Path() . '/Controllers/Backend/SwagSEOManager.php';
	}
}
?>
