<?php
$document = "1JPlP7mlX7rb0uA5DtGe_J-B1Ge59dO8ZJze8cKuOsSc";
$key = "AIzaSyDJOjkBsJe5A3VHPHtAW0N66xfhAcHivL8";
$range = "Sheet1!A:B";
$program = file_get_contents("https://sheets.googleapis.com/v4/spreadsheets/$document/values/$range?key=$key");

$sheetjson = json_decode($program);
$table = $sheetjson->values;

$generated = "<!-- program generated: ".date("r")." -->\n";
$generated .= '<table class="program-table">';
foreach ($table as $row) {
	$generated .= "<tr>";
	foreach ($row as $cell) {
		$onlyTime = preg_match('/^\d?\d:\d\d/', $cell) === 1;

		$colspan = "";
		if(count($row) == 1 && !$onlyTime)
			$colspan = " colspan='2' class='date'";

		$class = "";
		if($onlyTime)
			$class = " class='time'";
			
		$cell = nl2br($cell);
		$generated .= "<td$colspan$class>$cell</td>";

		// fix pro prázdné řádky :(
		if(count($row) == 1 && $onlyTime)
			$generated .= "<td></td>";
	}
	$generated .= "</tr>";
}
$generated .= '</table>';

file_put_contents("program.html", $generated);
