<?php
		session_start();
		$id = $_GET['id'];
		$conn = mysqli_connect("coffee-shop.mysql.database.azure.com", "tuan", "Tohru14617", "dacs2");
		$sql= "DELETE FROM binhluan where id=$id ";
		$ketqua = mysqli_query($conn, $sql);
?>
