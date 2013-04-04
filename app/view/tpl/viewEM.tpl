<?php if(!isset($showtext)){ ?>
<h2>Всі записи</h2>
<?php };?>
<?php foreach($ms as $m){ ?>
<div id="styleBD">
    
    <h1><?php echo $m['name'];?></h1>
    <h3><?php echo $m['tema'];?></h3>
   
    <p>
        <?php if(isset($showtext)){ ?>
            <?php echo nl2br ($m['text']);?>
        <?php };?>
        </br>
        <span>Створено: </span><?php echo $this->replaceDate($m['data']);?>
        <span>Змінено: </span><?php echo $this->replaceDate($m['data_reg']);?>
        <a href="?edit='<?php echo $m['id'];?>'">Редагувати</a>
       
        <a href="?del='<?php echo $m['id'];?>'" >Видалити</a>
        <div>
        <?php if(!isset($showtext)){ ;?>
            <a href="?view='<?php echo $m['id'];?>'" >Текст</a>
        <?php };?>
        </div>
    </p>
</div>
<?php };?>
  


