<?php
		session_start();
		$id = $_GET['id'];
		$conn = mysqli_connect("coffee-shop.mysql.database.azure.com", "tuan", "Tohru14617", "dacs2");
		$sql= "DELETE FROM danhmuc where id=$id ";
		$ketqua = mysqli_query($conn, $sql);
		header("location: ../danhmuc/quanlydm.php");
		
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
?>
</body>
</html>