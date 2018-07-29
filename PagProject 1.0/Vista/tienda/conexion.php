<?php
$connection = mysqli_connect('localhost', 'root', '', 'fruteria_poblada');
mysqli_query($connection, 'CREATE TEMPORARY TABLE `table`');
	

?>