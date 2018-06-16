<?php

/**
 * Created on 7th August 2015
 * @author Nsamba Vincent  Paxton
 */

require 'config/constants.php';

function __autoload($class){
	
	require LIBS.$class.'.php';
	
}


$app = new Bootstrap();

//Optional Path Settings
//$app->setControllerPath();
//$app->setModelPath();
//$app->setDefaultFile();
//$app->setErrorFile();

$app->init();
 