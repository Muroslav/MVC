<?php 
class CarController {

	public function viewAll(){


		echo "CarController =-> viewAll()";
	}



public function ViewIndex(){
	
$data = array('name' =>"Victor" , 'surname' => "Dzundza" );

$this -> render($data);

}


public function render($data){
ob_start();
extract($data);
include "/../view/index.phtml";
$view = ob_get_clean();


var_dump($view);

}
}




