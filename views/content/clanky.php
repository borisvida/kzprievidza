<?php		
	$connection = mysqli_connect(null, "3x9l52k4", "bojbyv5N", "3x9l52k4", null, "/tmp/mariadb101.sock");
	$connection->set_charset("utf8");
	
	$result = $connection->query("SELECT id, date, author, title FROM Articles ORDER BY date DESC");

	$table = "";
	while($row = $result->fetch_assoc()) {
    	$table .= '<tr>'.
					'<td class="noIndent"><a href="/clanok.php?id='.$row["id"].'">'.$row["title"].'</a></td>'.
					'<td class="smallerText noIndent">'.$row["author"].'</td>'.
					'<td class="smallerText noIndent">'.date("j. n. Y", strtotime($row["date"])).'</td>'.
				  '</tr>';
	};	
		
	$connection->close();	
?>

<p>Na tejto stránke nájdete najmä krátke úvahy nad Božím slovom, ale aj informácie o histórii a súčasnosti kresťanských zborov.</p>

<table id="clankyList">
	<tr>
		<th>Názov</th>
		<th>Autor</th>	
		<th>Dátum</th>
	</tr>
	<?php echo $table; ?>
</table>
