<?php

namespace PressForward;

use SplClassLoader as JaxionClassLoader;

class Loader {

	function __construct() {

		$this->includes();
		$this->namespace_to();

	}

	function test(){
		echo 'This thing';
		//var_dump(__METHOD__);
	}

	function includes() {
		//var_dump(__METHOD__);
		//var_dump( glob(dirname(__FILE__)."/lib/jaxion/src/*/*/*.php"));
		//foreach ( glob( dirname(__FILE__)."/lib/jaxion/src/*.php") as $filename ){
			//var_dump($filename);
			//include $filename;
		//}
		//die();
		$classLoader = new JaxionClassLoader('Intraxia\\Jaxion', dirname(__FILE__).'/lib/Jaxion/src');
		$classLoader->filterFinalPath("Intraxia\\Jaxion\\", '');
		$classLoader->register();

	}

	function namespace_to(){

	}

}

//new Loader;