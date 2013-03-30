<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $this->title;?></title>
	<link type="text/css" href="css/style.css" rel="STYLESHEET" />
</head>
<body>
	<div>
		<div><a href="/mvc/">На головну</a></div>
		
		<?php echo $this->warning;?>

		<div id="style" >
			<h2>Додати запис</h2>
		<form action="/mvc/" method="post" >
                    <p>Ім’я(max 10 sumbols):
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
                        <a href="?url=list"><input type="button" value="Показати всі записи"></a>

  		</form>
		</div>
              

	</div>
</body>
</html>