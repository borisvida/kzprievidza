<?php		
	$connection = mysqli_connect(null, "3x9l52k4", "bojbyv5N", "3x9l52k4", null, "/tmp/mariadb101.sock");
	$connection->set_charset("utf8");
	
	$result = $connection->query("SELECT id, date, title, text FROM News ORDER BY date DESC");

	$outp = "";
	while($row = $result->fetch_assoc()) {    	
		$outp .= ''.
				'<h4 id="'.$row["id"].'">'.date("j. n. Y", strtotime($row["date"])).' '.$row["title"].'</h4>'.
				'<p>'.$row["text"].'</p>';
	}		 
	mysqli_free_result($result);
	$connection->close();		
?>

<div id="newsPage">
	<?php echo $outp; ?>
</div>