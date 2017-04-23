<?php
$title = "About | EAMT 2017";
include("header.html");

function approx($czk){
	echo number_format($czk, 0, ",", " ")." CZK (approx ".number_format(round($czk/27), 0, ",", " ")." EUR)";
}
// TODO: změnit datum
$lateDate = "28.4.2017";
$lateEndDate = "21.5.2017";
$onsiteDate = "28.5.2017";
$earlyDisabled = time() < strtotime($lateDate) ? "" : ' class="disabled"';
$lateDisabled = time() < strtotime($lateEndDate) && time() > strtotime($lateDate) ? "" : ' class="disabled"';
$onsiteDisabled = time() > strtotime($onsiteDate) ? "" : ' class="disabled"';

?>
<div class="column">
	<header>
	<h1>Registration</h1>
	<h2>EAMT 2017: The 20th Annual Conference of the European Association for Machine Translation</h2>
	<p>Prague, Czech Republic
	<br>May 29 to 31, 2017
	<br><a href="https://ufal.mff.cuni.cz/eamt2017/">https://ufal.mff.cuni.cz/eamt2017/</a></p>
	</header>

	<h2>Prices</h2>
	<table class="prices">
	<thead>
		<tr>
			<th></th>
			<th>Early (until April 28)</th>
			<th>Late (until May 21)</th>
			<th>On-site</th>
		</tr>
	</thead>
	<tbody>
		<tr class="member-price">
			<th>Regular *</th>
			<td<?=$earlyDisabled?>><?=approx(6210)?></td>
			<td<?=$lateDisabled?>><?=approx(8100)?></td>
			<td<?=$onsiteDisabled?>><?=approx(370*27)?></td>
		</tr>
		<tr class="member-price">
			<th>Student *</th>
			<td<?=$earlyDisabled?>><?=approx(4725)?></td>
			<td<?=$lateDisabled?>><?=approx(5940)?></td>
			<td<?=$onsiteDisabled?>><?=approx(265*27)?></td>
		</tr>
		<tr>
			<th>Regular</th>
			<td<?=$earlyDisabled?>><?=approx(7830)?></td>
			<td<?=$lateDisabled?>><?=approx(9720)?></td>
			<td<?=$onsiteDisabled?>><?=approx(430*27)?></td>
		</tr>
		<tr>
			<th>Student</th>
			<td<?=$earlyDisabled?>><?=approx(5670)?></td>
			<td<?=$lateDisabled?>><?=approx(6615)?></td>
			<td<?=$onsiteDisabled?>><?=approx(280*27)?></td>
		</tr>
	</tbody>
	</table>
	<p><span class="member-price-note">* price for <a href="http://eamt.org/">EAMT</a> members</span></p>
	<h3>Workshop price</h3>
	<table class="prices">
	<thead>
		<tr>
			<th></th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Regular</th>
			<td><?=approx(1080)?></td>
		</tr>
		<tr>
			<th>Student</th>
			<td><?=approx(540)?></td>
		</tr>
	</tbody>
	</table>

	<h2>Registration</h2>
	<br>
	<a href="https://ufal.mff.cuni.cz/eamt2017/registration/">Continue to the registration form</a>.
</div>
<?php include("footer.html"); ?>
