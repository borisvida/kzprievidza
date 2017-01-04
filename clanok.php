<?php	
	$connection = mysqli_connect(null, "3x9l52k4", "bojbyv5N", "3x9l52k4", null, "/tmp/mariadb101.sock");
	$connection->set_charset("utf8");
	
	$id = $connection->real_escape_string($_GET["id"]);
	$result = $connection->query("SELECT id, date, author, title, text FROM Articles WHERE id=" . $id);

	$row = $result->fetch_assoc();
	$title = $row["title"];
	$text = $row["text"];
	$connection->close();
	
	$pageTitle = 'Článok '.$title;
	$description = mb_substr($myStr, 0, 100);

	$content = 'views/content/clanok.php';			
	include 'template.php';
?>