<?php
$document = "1JPlP7mlX7rb0uA5DtGe_J-B1Ge59dO8ZJze8cKuOsSc";
$key = "AIzaSyDJOjkBsJe5A3VHPHtAW0N66xfhAcHivL8";
$range = "Sheet1!A:B";
$program = file_get_contents("https://sheets.googleapis.com/v4/spreadsheets/$document/values/$range?key=$key");

$sheetjson = json_decode($program);
$table = $sheetjson->values;
?>
<table class="program-table">
	<?php
	foreach ($table as $row) {
		echo "<tr>";
		foreach ($row as $cell) {
			$onlyTime = preg_match('/^\d?\d:\d\d/', $cell) === 1;

			$colspan = "";
			if(count($row) == 1 && !$onlyTime)
				$colspan = " colspan='2' class='date'";

			$class = "";
			if($onlyTime)
				$class = " class='time'";
				
			$cell = nl2br($cell);
			echo "<td$colspan$class>$cell</td>";

			// fix pro prázdné řádky :(
			if(count($row) == 1 && $onlyTime)
				echo "<td></td>";
		}
		echo "</tr>";
	}
	?>
</table>
