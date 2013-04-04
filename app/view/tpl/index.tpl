 <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $this->title;?></title>
	<link type="text/css" href="css/style.css" rel="STYLESHEET" />
</head>
<body>
	<div>
         <div id="add">
            <a href="/mvc/">На головну</a>
            <a href="?add" >Додати запис</a>
         </div>
		<?php echo $this->warning;?>

		<div align="center">
                    <?php echo $this->content;?>
			
		</div>
                
        </div>

</body>
</html>