<?php

/**
 * Main View
 *
 * Клас для виведення контенту
 */
class View {

    private $title = "Головна";
    private $warning = "";
    private $content = "";

    /**
     * setTitle
     *
     * Задає заголовок сторінки
     *
     * @param  string  заголовок сторінки
     * @return void
     */
    public function setTitle($t) {
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
    public function setWarning($w) {
        $this->warning = $w;
    }
    
    public function setContent($c) {
        $this->content = $c;
    }

    /**
     * viewLayout
     *
     * Виводить сторінку
     *
     * @return void
     */
    public function viewLayout() {
        include 'tpl/index.tpl';
    }

    public function viewAddMessage() {

        ob_start();
        include 'tpl/addmassage.tpl';

        $out1 = ob_get_contents();

        ob_end_clean();

        return $out1;
    }
    

    /**
     * viewEditMessage
     *
     * Повертає форму для редагування повідомлення
     *
     * @param  array повідомлення
     * @return string
     */
    public function viewEditMessage($m) {

        ob_start();
        include 'tpl/editM.tpl';

        $out1 = ob_get_contents();

        ob_end_clean();

        return $out1;
    }

    /**
     * addMessages
     *
     * Додає в список повідомлення
     *
     * @param  array повідомлення
     * @return void
     */
    public function viewMessages($ms) {

        ob_start();

        include 'tpl/viewEM.tpl';

        $out1 = ob_get_contents();

        ob_end_clean();

        return  $out1;
    }
    
    public function viewMessage($m) {
        
        $showtext = true;
        $ms[] = $m; 
        ob_start();

        include 'tpl/viewEM.tpl';

        $out1 = ob_get_contents();

        ob_end_clean();

        return  $out1;
    }

    /**
     * replaceDate
     *
     * Змінює формат дати
     *
     * @param  string  дата і час
     * @return string
     */
    private function replaceDate($d) {
        return preg_replace("/^(\d{4})-(\d{2})-(\d{2})\s(\d{2})\:(\d{2}).*/", "\\3.\\2.\\1 в \\4:\\5", $d);
    }

}

// class View