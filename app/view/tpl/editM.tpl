<div id="style" >

    <h2>Змінити запис</h2>
    
    <form action="/mvc/" method="post">
        
        <input type="hidden" name="id" value="<?php echo $m['id'];?>" >
        <p>Нова назва(max 10 sumbols):
            <input name="title" placeholder="Назва"	type="text" value="<?php echo $m['name'];?>" maxlength="10" required/>
        </p>
        <p>Нова тема:
            <textarea name="tema" rows="2" cols="50" placeholder="Короткий текст" maxlength="255" required ><?php echo $m['tema'];?> </textarea>
        </p>
        <p>Новий текст:
            <textarea name="text" rows="4" cols="50" placeholder="Повний текст" required><?php echo $m['text'];?></textarea>
        </p>	
        <button name="editmessage">Зберегти зміни</button>
    </form>
    
    
</div>
