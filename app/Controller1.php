<?php

require 'view/View.php';
require 'model/autholog.php';
require 'model/Model.php';

class Controller {
        public $view;
        public $model;
        public $login;
        public function __construct() {
        $this->view = new View;
        $this->model= new Model;
        $this->login= new Login;
        $this->model->connect();      
        
        
    }
	public function initPage()
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
                        $this->view->setContent($this->view->viewMessage($message));
                        $this->view->setTitle($message['name']);

		}elseif (isset($_GET['add'])) {
                        $this->view->setContent($this->view->viewAddMessage());
                        $this->view->setTitle("Додати повідомлення");
                        
                }elseif (isset($_GET['log'])) {
                        $this->view->setContent($this->view->viewAddLog());
                        $this->view->setTitle("Додати користувача");

                    }elseif (isset($_GET['register'])) {
                        $this->view->setContent($this->view->viewRegister());
                        $this->view->setTitle("Register");
                        
		}elseif(isset($_GET['login'])){

        }

        elseif (isset($_POST['editmessage'])) {
			$message = $this->parsePost($_POST);
			if($this->model->editMassage($message)){
			   $this->view->setWarning('Зміни збережено!');
			};
                        
                        
                }elseif (isset ($_POST['addautholog'])) {
                        $message = $this->parsePost($_POST);
                        if($this->login->addLog($message)){
                            $this->view->setWarning('Акаунт додано');
                        }             


		}elseif (isset($_POST['addmessage'])) {
			$message = $this->parsePost($_POST);
			if($this->model->addMessage($message)){
			   $this->view->setWarning('Повідомлення додано!');
			};
                     
                }else{
                    $this->createMainPage();
                }

		
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
            if (isset($p['title'])) {$message['name'] = $p['title'];};
            if (isset($p['tema'])) {$message['tema'] = $p['tema'];};
            if (isset($p['text'])) {$message['text'] = $p['text'];};
            if (isset($p['password'])) {$message['password'] = $p['password'];};
            if (isset($p['login'])) {$message['login'] = $p['login'];};

			// $message['name'] = htmlspecialchars(addslashes(trim($p['title'])));
            // $message['tema'] = htmlspecialchars(addslashes(trim($p['tema'])));
			// $message['text'] = htmlspecialchars(addslashes(trim($p['text'])));
            // $message['pass'] = htmlspecialchars(addslashes(trim($p['pass'])));
            // $message['email'] = htmlspecialchars(addslashes(trim($p['email'])));	
                        
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
                $this->view->setContent($this->view->viewMessages($mess));
        
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
                 $this->view->viewLayout();
        }      
  
} // class Controller
