<?php
	$connection = mysqli_connect(null, "3x9l52k4", "bojbyv5N", "3x9l52k4", null, "/tmp/mariadb101.sock");
	$connection->set_charset("utf8");

	$result = $connection->query("SELECT id, date, speaker, path, theme FROM Audio ORDER BY date DESC");

	$table = "";
	while($row = $result->fetch_assoc()) {
    	$table .= '<tr>'.
					'<td class="noIndent">'.$row["speaker"].'</a></td>'.
          '<td class="noIndent smallerText">'.$row["theme"].'</a></td>'.
					'<td class="noIndent smallerText">'.date("j. n. Y", strtotime($row["date"])).'</td>'.
          '<td class="noIndent"><audio controls>
            <source src="'.$row["path"].'.mp3" type="audio/mpeg">
          </audio></td>'.
				  '</tr>';
	};

	$connection->close();
?>

<p>Nahrávky služieb slovom z niektorých naších zhromaždení.</p>

<table id="clankyList">
	<tr>
		<th>Autor</th>
		<th>Téma</th>
		<th>Dátum</th>
    <th>Nahrávka</th>
	</tr>
	<?php echo $table; ?>
</table>
