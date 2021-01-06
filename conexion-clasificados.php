		<?php 
		$user="root";
		$pass="root";
		$server ="localhost";
		$db="clasificados";
		$con=mysqli_connect($server,$user,$pass,$db);
		

		
		return $con;
		 ?>