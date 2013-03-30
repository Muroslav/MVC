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

		<div align="center">
			<h2>Всі записи</h2>
		<table   border="2">
			<thead>
				<tr >
					<th>назва</th>
					<th>тема</th>
                                        <th>текст</th>
					<th>створено</th>
					<th>змінено</th>
					<th>редагувати</th>
					<th>видалити</th>
				</tr>
			</thead>
			<tbody>
				<?php echo $this->allmessages;?>
			</tbody>
		</table>
		</div>
                
        </div>

</body>
</html>