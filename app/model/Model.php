<?php
/**
 * Main Model
 *
 * Клас для роботи з базою даних
  */
class Model {

	/**
     * connect
     * Створює зєднання з базою даних
     *
     * @return void
     */
	function connect()
	{
		$db = mysql_connect('localhost','root','') or die('Немає з\'єднання з БД!!!');
		mysql_select_db('new_base',$db) or die('Не підключена БД!!!');
		mysql_query("SET NAMES utf8");
	}

	/**
     * getMessage
     *
     * Повертає повідомлення
     *
     * @param  int	id повідомлення
     * @return array
     */
	public function getMessage($id)
	{
		$result = mysql_query('SELECT `id`,`name`,`tema`,`text`,`data`,`data_reg` 
								FROM `bvblog` WHERE `id`='.$id.';');
		$myrow  = mysql_fetch_array($result);
		$message = array(	
							'id'		=> $myrow['id'],
							'name'		=> $myrow['name'],
							'tema'  	=> $myrow['tema'],
							'text'		=> $myrow['text'],
							'data'      => $myrow['data'],
							'data_reg'	=> $myrow['data_reg']
						);
               
		return $message;
	}

        
	/**
     * getAllMessages
     *
     * Повертає всі повідомлення
     *
     * @return array
     */
	public function getAllMessages()
	{
		$result = mysql_query('SELECT `id`,`name`,`tema`,`text`,`data`,`data_reg` 
								FROM `bvblog`;');
		
		$messages = array();
		while ($myrow  = mysql_fetch_array($result)){
			$messages[] = array(
								'id'		=> $myrow['id'],
								'name'		=> $myrow['name'],
								'tema'          => $myrow['tema'],
								'text'	 	=> $myrow['text'],
								'data'          => $myrow['data'],
								'data_reg'	=> $myrow['data_reg']
								);
		}
		return $messages;
	}

	/**
     * addMessage
     *
     * Додає в базу даних нове повідомлення
     *
     * @param  array повідомлення
     * @return boolean
     */
	public function addMessage($m)
	{
		$sql = "INSERT INTO `bvblog` (`id`,`name`,`tema`,`text`,`data`,`data_reg`) 
				VALUES (NULL, '".$m['name']."', '".$m['tema']."', '".$m['text']."', NOW(), NOW());";
		mysql_query($sql);	
		return true;
	}

     
     /**
     * editMassage
     *
     * Зміннює повідомлення
     *
     * @param  array повідомлення
     * @return boolean
     */
	public function editMassage($m)
	{	
		mysql_query("UPDATE `bvblog` SET `name` = '".$m['name']."',`tema` = '".$m['tema']."',`text` = '".$m['text']."',`data_reg` = NOW() WHERE id = ".$m['id'].";");
		return true;
	}

        
            
        
	/**
     * delMessage
     *
     * Видаляє повідомлення
     *
     * @param  int id повідомлення
     * @return boolean
     */
	public function delMessage($id)
	{
		mysql_query('DELETE FROM `bvblog` WHERE `id` = '.$id.';');
		return true;
	}

} // class Model