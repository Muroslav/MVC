<?php 
		include '/app/Controller1.php';
class Router{

	public function routeFake(){

		$cltr = new Controller();
		$cltr->initPage();
	}

	public function route(){
		$array = $this->parseRoutes();
		if(($cname = $this->checkControllerByName($array['controller'])) != null){
			$ctrl = new $cname();
			if(($mname = $this->checkMethodInCOntrollerByNAme($ctrl,$array['action'])) != null){
				$ctrl->$mname();
			}else{
				die("method {$array['action']} doesn't exists in {$array['controller']} <br>");
			}
		}else
		{
			die("controller {$array['controller']} doesn't found <br>");
		}
	}



	private function checkControllerByName($name){
$controllerPath = "controller";
if(file_exists($controllerPath."/".$name.".php")){
require_once $controllerPath."/".$name.".php";
if(class_exists($name)){
	return $name;
}
return null;
}}


public function checkMethodInCOntrollerByNAme($controller,$action){
	if(method_exists($controller, $action)){
		return $action;
	}else 
	return null;

}

private function parseRoutes(){
	$array = array();
$qwer=explode("/",$_GET['route']);
$controller = $qwer['0'];
$action = $qwer['1'];
$array['controller'] = $controller;
$array['action'] = $action;
	return $array;
}
}