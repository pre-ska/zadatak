<?php
	include 'data.php';
	echo "<link rel='stylesheet' type='text/css' href='stil.css'>";

	function date_trans($datum) {
		$a = (explode('-', $datum));

		return "$a[2].$a[1].$a[0].";
	}

	function _red($redni, $niz) {
		$niz['datum'] = date_trans($niz['datum']);
		$a = "selected='selected'";
		$b = "";

		if ($niz['placeno'] === 'Ne') {
			$a = "";
			$b = "selected='selected'";
		}

		echo "<tr>
						<td>$redni.</td>
						<td>{$niz['prezime']}</td>
						<td>{$niz['ime']}</td>
						<td>{$niz['datum']}</td>
						<td>
							<select autocomplete='off' class='selCl'>
								<option $a value='da'>Da</option>
								<option $b value='ne'>Ne</option>
							</select>
						</td>
					</tr>";
	}

	echo '
		<table>
			<tr>
				<th>Rbr.</th>
				<th>Prezime</th>
				<th>Ime</th>
				<th>Datum prijave</th>
				<th>Plaćeno</th>
			</tr>';

	foreach($data as $key => $value) _red($key + 1, $value);

	echo '</table>';
?>