<?php
$title = "Program | EAMT 2017";
include("header.html");
?>

<div class="column">
<header>
<h1>Program</h1>
<h2>EAMT 2017: The 20th Annual Conference of the European Association for Machine Translation</h2>
<p>Prague, Czech Republic
<br>May 29 to 31, 2017
<br><a href="https://ufal.mff.cuni.cz/eamt2017/">https://ufal.mff.cuni.cz/eamt2017/</a></p>
</header>

<p><strong>Keynote speaker</strong><br>
João Graça, CTO and co-founder of Unbabel (Lisboa, Portugal)<br>
"How to combine AI with the crowd to scale professional-quality translation"</p>

<p><strong>General programme</strong><br>
The programme will include oral presentations and poster sessions. Accepted papers may be assigned to an oral or poster session, but no differentiation will be made in the conference proceedings.</p>

<p><strong>Best Thesis Award</strong><br>
José Guilherme Carmargo de Souza<br>
Adaptive Quality Estimation for Machine Translation and Automatic Speech Recognition</>
<p>The winner of the EAMT Best Thesis Award 2017 will present his work.</p>

<p><strong>EAMT General Assembly</strong><br>
Everyone is invited to the annual General Assembly of the European Association for Machine Translation. But if you really want to take part in the future of the EAMT should, become a member: <a href="http://www.eamt.org/membership.php">http://www.eamt.org/membership.php</a>.</p>
<p><strong>Research articles</strong><br>
Research articles presented on EAMT 2017 are published in <a href="https://ufal.mff.cuni.cz/pbml/108">The Prague Bulletin of Mathematical Linguistics 108</a>.</p>
<?php
if(file_exists("program/program.html")):
	?>
		<p><strong>Schedule</strong><br>
	<?php
	include("program/program.html");
endif;
?>
</div>
<?php include("footer.html"); ?>
