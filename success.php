<?php
    session_start();
	if($_GET["send"] == 1) {
	     echo "Ваше сообщения успешно отправлено на".$_SESSION["to"];	
		 echo "<br /><a href='index.php'>Вернуться</a>";
	}
?>