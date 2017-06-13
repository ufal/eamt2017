<?php
$title = "Program | EAMT 2017";
include("header.html");
?>

<div class="column">
<header>
<h1>Gallery</h1>
<h2>EAMT 2017: The 20th Annual Conference of the European Association for Machine Translation</h2>
<p>Prague, Czech Republic
<br>May 29 to 31, 2017
<br><a href="https://ufal.mff.cuni.cz/eamt2017/">https://ufal.mff.cuni.cz/eamt2017/</a></p>
</header>

<div class="column">
	<?php 
	var_dump(scandir("."));
	var_dump(scandir("../eamt2017-photos"));
	?>
</div>