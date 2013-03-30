<?php

require 'View.php';
require 'Model.php';

class Controller {
        public $view;
        public $model;
    function __construct() {
        $this->view = new View;
        $this->model= new Model;
        $this->model->connect();
        
    }
	public function initPage($_POST,$_GET)
	{	
		if (isset($_GET['del'])) {
			$this->model->delMessage($_GET['del']);
			$this->view->setWarning('Повідомлення видалено!');

		}elseif (isset($_GET['edit'])) {
			$this->view->setWarning(
			$this->view->viewEditMessage(
			$this->model->getMessage($_GET['edit'])));

		}elseif (isset($_GET['view'])) {
			$message = $this->model->getMessage($_GET['view']);
                                   $this->view->setWarning(
                                   $this->view->viewMessage($message));
                                   $this->view->setTitle($message['name']);

		}elseif (isset($_POST['editmessage'])) {
			$message = $this->parsePost($_POST);
			if($this->model->editMassage($message)){
			   $this->view->setWarning('Зміни збережено!');
			};

		}elseif (isset($_POST['addmessage'])) {
			$message = $this->parsePost($_POST);
			if($this->model->addMessage($message)){
			   $this->view->setWarning('Повідомлення додано!');
			};
		}

		$this->createMainPage();
		
	}

	/**
     * parsePost
     *
     * Парсить та перевіряє на валідність дані передані $_POST запитом
     *
     * @param  array	дані передані $_POST запитом
     * @return array
     */
	public function parsePost($p)
	{
		$message = array();
			if(isset($p['id'])){$message['id'] = $p['id'];};
			$message['name'] = htmlspecialchars(addslashes(trim($p['title'])));
			$message['tema'] = htmlspecialchars(addslashes(trim($p['tema'])));
			$message['text'] = htmlspecialchars(addslashes(trim($p['text'])));

		return $message;
	}

	/**
     * createMainPage
     *
     * Створює головну частину сторінки
     *
     * @return void
     */
	public function createMainPage()
	{
		$mess = $this->model->getAllMessages();
		foreach ($mess as $value) {
			$this->view->addMessages($value);
		}
	}

	/**
     * viewPage
     *
     * Показує сторінку користувачу
     *
     * @return void
     */	
	public function viewPage()
	{
            $url = $_GET["url"];
            if($url === "view")
		$this->view->viewLayout();
            else if($url === "list")
                 $this->view->viewList();
           
               	
                else $this->view->viewLayout();
        }      
  
} // class Controller
