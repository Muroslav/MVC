<?php
/**
 * Main View
 *
 *Клас для виведення контенту
 */
class View {

	private $title = "Головна";
	private $warning = "";
	private $allmessages = "";

	/**
     * setTitle
     *
     * Задає заголовок сторінки
     *
     * @param  string  заголовок сторінки
     * @return void
     */
	public function setTitle($t)
	{
		$this->title = $t;
	}

	/**
     * setWarning
     *
     * Задає повідомлення
     *
     * @param  string повідомлення
     * @return void
     */
	public function setWarning($w)
	{
		$this->warning = $w;
	}

	/**
     * viewLayout
     *
     * Виводить сторінку
     *
     * @return void
     */
	public function viewLayout()
	{	
		include 'index.tpl';
            
             	}
                public function viewList(){
                        include 'list.tpl';
                }

	/**
     * viewEditMessage
     *
     * Повертає форму для редагування повідомлення
     *
     * @param  array повідомлення
     * @return string
     */
	public function viewEditMessage($m)
	{
		return '<div id="style" >
					<h2>Змінити запис</h2>
				 <form action="/mvc/" method="post">
                                	<input type="hidden" name="id" value="'.$m['id'].'" >
				 <p>Нова назва:
                                        <input name="title" placeholder="Назва"	type="text" value="'.$m['name'].'" maxlength="10" required/>
				 </p>
                                 <p>Нова тема:
                                        <textarea name="tema" rows="2" cols="50" placeholder="Короткий текст" maxlength="255" required >'.$m['tema'].'</textarea>
				 </p>
                                 <p>Новий текст:
                                        <textarea name="text" rows="4" cols="50" placeholder="Повний текст" required>'.$m['text'].'</textarea>
				 </p>	
                                        <button name="editmessage">Зберегти зміни</button>
		  		</form>
				</div>';
	}

	/**
     * addMessages
     *
     * Додає в список повідомлення
     *
     * @param  array повідомлення
     * @return void
     */
	public function addMessages($m)
	{
		$this->allmessages .= 	"<tr>
									<td>".$m['name']."</td>
									<td>".$m['tema']."</td>
                                                                        <td>".$m['text']."</td>
									<td>".$this->replaceDate($m['data'])."</td>
									<td>".$this->replaceDate($m['data_reg'])."</td>
									<td ><a href='?edit=".$m['id']."'>Редагувати</a></td>
									<td><a href='?del=".$m['id']."' >Видалити</a></td>
								</tr>";
	}

	/**
     * replaceDate
     *
     * Змінює формат дати
     *
     * @param  string  дата і час
     * @return string
     */
	private function replaceDate($d) 
	{
		return preg_replace("/^(\d{4})-(\d{2})-(\d{2})\s(\d{2})\:(\d{2}).*/", "\\3.\\2.\\1 в \\4:\\5",$d);
	}


} // class View