<?php

//微赞科技 by QQ:800083075 http://www.012wz.com/
if (!defined('IN_IA')) {
	die('Access Denied');
}
require IA_ROOT . '/addons/ewei_shop/defines.php';
class PluginProcessor extends WeModuleProcessor
{
	public $model;
	public $modulename;
	public $message;
	public function __construct($name = '')
	{
		$this->modulename = 'ewei_shop';
		$this->pluginname = $name;
		$this->loadModel();
	}
	private function loadModel()
	{
		$modelfile = IA_ROOT . '/addons/' . $this->modulename . "/plugin/" . $this->pluginname . "/model.php";
		if (is_file($modelfile)) {
			$classname = ucfirst($this->pluginname) . "Model";
			require $modelfile;
			$this->model = new $classname($this->pluginname);
		}
	}
	public function respond()
	{
		$this->message = $this->message;
	}
}