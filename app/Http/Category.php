<?php

namespace App\Http;

use Config\Category_Config;
//设置网站直播分类
class Category 
{
	private $configFile;
	public $category_config;
	//初始化对应的config文件
	public function initconfig()
	{
		$this->configFile = app_path().'/category.php';;
		if (file_exists($this->configFile)) {
			
        	$this->category_config = require($this->configFile);
		}else{
			$this->category_config = '';
		}
	}
	public function write($inputArray)
    {	
    	$this->initconfig();
    	self::edit($this->configFile , $inputArray);
    }
	//修改数据库连接配置文件
	public static function edit($configFile , $inputArray)
	{
		
		//读取配置信息内容
		if(file_exists($configFile))
		{
			$configStr   = file_get_contents($configFile);
			$configArray = require($configFile);
		}
		if(trim($configStr)=="")
		{
			$configStr   = "<?php return array( \r\n);?>";
			$configArray = array();
		}
		//var_dump($configArray);die;
		$inputArray = array_merge($configArray,$inputArray);
		$configData = var_export($inputArray,true);
		$configStr = "<?php return {$configData}?>";

		//写入配置文件
		$fileObj   = new Category_Config($configFile,'w+');
		$writeResult = $fileObj->write($configStr);
		return $writeResult;
	}
}