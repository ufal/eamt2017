<?php
$title = "Program | EAMT 2017";
include("header.html");



$document = "1JPlP7mlX7rb0uA5DtGe_J-B1Ge59dO8ZJze8cKuOsSc";
$key = "AIzaSyDJOjkBsJe5A3VHPHtAW0N66xfhAcHivL8";
$range = "Sheet1!A:B";
$program = file_get_contents("https://sheets.googleapis.com/v4/spreadsheets/$document/values/$range?key=$key");

$sheetjson = json_decode($program);
$table = $sheetjson->values;
?>

<div class="column">
<header>
<h1>Program</h1>
<h2>EAMT 2017: The 20th Annual Conference of the European Association for Machine Translation</h2>
<p>Prague, Czech Republic
<br>May 29 to 31, 2017
<br><a href="https://ufal.mff.cuni.cz/eamt2017/">https://ufal.mff.cuni.cz/eamt2017/</a></p>
<p>at the Faculty of Mathematics and Physics, Charles University,<br>
Malostranské náměstí 25, 11800 Prague 1, Czech Republic<br>
Room S9</p>

</header>
</div>

<div class="column">
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
</div>
<?php include("footer.html"); ?>
