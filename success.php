<?php
    session_start();
	if($_GET["send"] == 1) {
	     echo "���� ��������� ������� ���������� ��".$_SESSION["to"];	
		 echo "<br /><a href='index.php'>���������</a>";
	}
?>