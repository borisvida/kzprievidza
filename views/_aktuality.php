<?php		
	$connection = mysqli_connect(null, "3x9l52k4", "bojbyv5N", "3x9l52k4", null, "/tmp/mariadb101.sock");
	$connection->set_charset("utf8");
	
	$result = $connection->query("SELECT id, date, title, text FROM News ORDER BY date DESC");

	$outp = "";
	while($row = $result->fetch_assoc()) {    	
		$outp .= '<p class="pblock">'.
				date("j. n. Y", strtotime($row["date"])). 
				' <span>'.($row["title"] ?: $row["text"]).'</span> '.
				'<a href="/aktuality#'.$row["id"].'">>></a></p>';
	}		 
	mysqli_free_result($result);
	$connection->close();	
?>

<div id="aktuality">
	<p id="newsTitle">Aktuality:</p>
	<div id="newsList">
		<?php echo $outp ?>
	</div>
	<p class="more"><a href="/aktuality">Viac...</a></p>
</div>