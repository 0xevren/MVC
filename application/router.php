<?php
class Router{

		public static function route(Request $request){

			$controller = $request->getController().'Controller';
			$method = $request->getMethod();
			$args = $request->getArgs();

			$controllerFile = SITE_PATH.'controllers/'.$controller.'.php';

			if(is_readable($controllerFile)){
				require_once $controllerFile;

				$controller = new $controller;
				$method = (is_callable(array($controller,$method))) ? $method : 'index';
				call_user_func(array($controller,$method));
				
			}
		}
	}

?>
