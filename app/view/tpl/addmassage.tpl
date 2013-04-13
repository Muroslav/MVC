<div id="style" >
        <h2>Додати запис</h2>
<form action="/" method="post" >
    <p>Назва(max 10 sumbols):
        <input name="title" placeholder="Назва"	type="text" maxlength="10"required>
    </p>
    <p>   Тема:
        <textarea name="tema" rows="2" cols="50" placeholder="Короткий текст" maxlength="255" required></textarea>
    </p>
    <p>Повний текст:
        <textarea name="text" rows="4" cols="50" placeholder="Повний текст" required></textarea>
    </p>
        <p><button name="addmessage">Додати повідомлення</button>
        <input type="reset" value="Очистити"></p>

</form>
</div>
      