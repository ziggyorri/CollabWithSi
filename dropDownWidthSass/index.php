<?php session_start();if(!isset($_SESSION['UserData']['Username'])){header("location:included/login.php");exit;}
require_once('./included/connection.php');
include("./included/query2.php");

$ID = '1';
if (isset($_POST['vidburdurID'])) {
	$ID = $_POST['vidburdurID'];
}

$vidburdsTafla = null;

foreach ($vidburdur as $k)
{
	if ($k[0] == $ID) {$vidburdsTafla = $k;}
}
$heiti = $vidburdsTafla[1];
$imgUrl = $vidburdsTafla[2];
$lysing = $vidburdsTafla[3];
$dags = $vidburdsTafla[4];
$litir1 = $vidburdsTafla[5];
$litir2 = $vidburdsTafla[6];
$litir3 = $vidburdsTafla[7];

$litir2r=RGB($litir2,'1');
$litir2g=RGB($litir2,'2');
$litir2b=RGB($litir2,'3');

$litir3r=RGB($litir3,'1');
$litir3g=RGB($litir3,'2');
$litir3b=RGB($litir3,'3');
?>
<!DOCTYPE html>
<html>
<head>
	<title>drop down</title>
	<link rel="stylesheet" type="text/css" href="DropDead.css">
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
	<style type="text/css">
		body{
			color: <?php echo $litir3 ?>;
			background-color:<?php echo $litir2 ?>;
		}
		nav ul li ul li,
		#mainbody1{
			background-color:<?php echo $litir2; ?>;
		}
		a{
			color: <?php echo $litir3 ?>;
		}
		a:hover{
			color:rgb(<?php echo $litir3r.",".$litir3g.",".$litir3b; ?>);
		}
		nav ul li ul li:hover,
		nav ul li,
		.info,
		.opnun,
		footer,
		div{
			background-color:rgb(<?php echo $litir2r.",".$litir2g.",".$litir2b; ?>);
		}

		.navcontainer{
			background-color: transparent;
		}
	</style>
</head>
<body>
<div id="mainbody1" class="mainbody">
<div class="navcontainer">
<input type="checkbox" id="toggle">
	<label for="toggle">&#9776menu</label>
<nav>
      <ul>
		<li>
			<input type="radio" name="db" id="tog1">
			<label class="undirtoggle" for="tog1">Current page</label>
			<ul>
				<li><a id="link1" href="#">Discription</a></li>
				<li><a id="link2" href="#">Map</a></li>
				<li><a id="link3" href="#">Other info</a></li>
				<li><a id="link4" href="#">Contacts</a></li>
			</ul>
		</li>
		<li>
			<input type="radio" name="db" id="tog2">
			<label class="undirtoggle" for="tog2">Top tengill</label>
			<ul>
				<li><a onclick="" href="#">tengill</a></li>
				<li><a href="#">tengill</a></li>
				<li><a href="#">tengill</a></li>
				<li><a href="#">tengill</a></li>
			</ul>
		</li>
		<li>
			<input type="radio" name="db" id="tog3">
			<label class="undirtoggle" for="tog3">Top tengill</label>
			<ul>
				<li><a href="#">tengill</a></li>
				<li><a href="#">tengill</a></li>
				<li><a href="#">tengill</a></li>
				<li><a href="#">tengill</a></li>
			</ul>
		</li>
		<li><a href="included/logout.php">Logout</a>
			
		</li>
	</ul>
</nav>
</div>
	<div id="titleID" class="title"><?php echo $heiti; ?>
	<!--ICELANDIC SAGAS: Sýning til stuðnings Amnesty International--></div>

	<div id="img"><?php echo '<img src="'. $imgUrl . '">'; ?>
	<!--<img src="https://www.harpa.is/wp-content/uploads/2016/11/1600x500.jpg">--></div>
	

	<div id="heading1" class="main">
	<?php 
	$lysingLoka = explode('◘', $lysing);
		for ($i = 0; $i < count($lysingLoka); $i++) { 
			if ($i==0) {
				echo "<div>";
				echo $lysingLoka[$i];
				echo "</div>";
			}
			else{
				echo "<p>";
				echo $lysingLoka[$i];
				echo "</p>";
			}
		}
	 ?>
		<!--<div>Hinn 12. nóvember verður sýningin Icelandic Sagas: The Greatest Hits in 75 minutes haldin í Hörpu til stuðnings Amnesty International. Allir listamennirnir gefa vinnu sína og rennur ágóðinn til Amnesty International. Aðstandendur sýningar ákváðu að halda sýninguna til stuðnings þeirra vegna flóttamannakrísunnar sem nú ríkir í heiminum og baráttu Amnesty International fyrir málefnum flóttafólks.</div>

		<p>Tveir af frambærilegustu leikurum þjóðarinnar kynna Íslendingasögurnar – Brot af því besta á 75 mínútum – Stórskemmtilega leikhús rússíbanareið í gegnum þjóðararf íslensku fornbókmenntanna.</p>

		<p>Íslendingasögurnar eru 40 sannar sögur af fyrstu kynslóðum íslenskra landnema – Það er að segja Íslendingar segja að þær séu sannar. Flestir aðrir segja: Nei Heyrðu nú Hemmi minn!</p>

		<p>Allir geta hinsvegar verið sammála því að þær eru stórbrotnar sögur af dugandi mönnum og djörfum konum. Rúmlega þúsund ára gamlar frásagnir af strandhöggi erlendis og blóðhefndum heima fyrir. Sögur sem gengið hafa mann fram af manni og varðveist á skinnhandritum.</p>

		<p>Íslendingasögurnar eru skínandi krúnudjásn íslenskrar þjóðmenningar, raunsannar lýsingar af ofurvenjulegum víkingum sem kljást við við ofurvenjuleg víkingavandamál – Eins og hvernig maður fær konuna sína til að hætta drepa þræla nágrananna, hvernig eigi að bregðast við þegar manni er sagt að stanga rassgarnarenda merarinnar úr tönnunum og hvernig eigi að hefja málaferli við mág sinn fyrir að standa ekki undir… væntingum eiginkonu sinnar.</p>

		<p>Velkomin í heim Hallgerðar Langbrókar, Gunnlaugs Orms-Tungu, Víga-Glúms, Haraldar Hárfagra, Mjallar sem-stærst-var-allra-kvenna-sem-ekki-voru-risar og Leifs Heppna sem fann Ameríku… og týndi henni aftur.</p>

		<p>Þú hittir þau öll í Íslendingasögurnar – Brot af því besta á 75 mínútum. Leyfið sögunum að hrífa ykkur, uppfræða og skemmta – og komist að því hvað það merkir að kasta bláum brókum upp í opið geðið á fólki. Í alvöru.</p>
-->
	</div>
<div id="info" class="Price">
		<?php 
		$dagsLoka = explode('◘', $dags);
		for ($i=0; $i < count($dagsLoka)-1; $i++) { 
			echo '<div class="meh"><h3>'.$dagsLoka[$i].'</h3></div>';
		}
		if (count($dagsLoka)>=1) {
			echo '<div><h3>'.$dagsLoka[count($dagsLoka)-1].'</h3></div>';
		}
		?>
		<!--<div class="meh"><h2>Date</h2><h3>12.november 2016</h3><h3>4:00pm</h3></div>

		<div class="meh">Shown in<h3>Norðurljóst</h3></div>

		<div>Price <h3>4.900</h3></div>-->
	</div>

	<div class="opnun">
	<h2>Opnunartímar</h2>
		<div class="meh">Virka Daga: <h3>9:00 - 18:00</h3></div>

		<div>Helgar: <h3>10:00 - 18:00</h3></div>
	</div>
		<div id="mapi">
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13918.706224510119!2d-21.934276045776542!3d64.14662947364903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48d674d3023a19c7%3A0xdbbf050da40f5d28!2sHarpan%2C+101+Reykjav%C3%ADk!5e0!3m2!1sis!2sis!4v1478866535521" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

	<footer>
		<ul>
		Harpa
			<li><a href="">Austurbakka 2, 101 Reykjavík</a></li>
			<li><a href="">Sími: 528 5000</a></li>
			<li><a href="">Miðasala: 528 5050</a></li>
			<li><a href="">harpa@harpa.is</a></li>
		</ul>
		<ul>
		Íbúar
			<li><a href="">Sinfóníuhljómsveit Íslands</a></li>
			<li><a href="">Íslenska óperan</a></li>
			<li><a href="">Stórsveit Reykjavíkur</a></li>
			<li><a href="">Maxímús Músíkús</a></li>
		</ul>
		<ul id="ref">
		referenslist
			<li><a href="https://www.harpa.is/">https://www.harpa.is/</a></li><!--https://www.harpa.is/dagskra/vidburdur/icelandic-sagas/-->
			<li><a href="http://www.w3schools.com/">http://www.w3schools.com/</a></li>
			<li><a href="http://stackoverflow.com/">http://stackoverflow.com/</a></li>
		</ul>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js.js"></script>
</div>
</body>
</html>
<?php 
function brighten($color, $prosent){
	if (count($color)==7) {
		$R=$color[1].$color[2];
		$G=$color[3].$color[4];
		$B=$color[5].$color[6];

	}
}
function hexOc($hex){
	if (is_numeric($hex)) {
		return $hex;
	}
	else{
		switch ($hex) {
			case 'A':
			return '10';
			break;
			case 'B':
			return '11';
			break;
			case 'C':
			return '12';
			break;
			case 'D':
			return '13';
			break;
			case 'E':
			return '14';
			break;
			case 'F':
			return '15';
			break;
			default:
			return 'F';
			break;
		}
	}
}

function RGB($litir, $Ret){
$R = hexOc($litir[1])*16+hexOc($litir[2]);//breit í tvíundakerfi
$G = hexOc($litir[3])*16+hexOc($litir[4]);//breit í tvíundakerfi
$B = hexOc($litir[5])*16+hexOc($litir[6]);//breit í tvíundakerfi
$proT = '11';//% tala
if($R-5*($B+$G>10) || $G-5*($B+$R>10) || $B-5*($R+$G>10)) 				//extream colors
{				
	$proT='70';
	$R = ceil($R+(($R)*$proT/100));//uppýstur um % tölu    		heldur lit
		$G = ceil($G+(($G)*$proT/100));//uppýstur um % tölu
		$B = ceil($B+(($B)*$proT/100));//uppýstur um % tölu

		if ($R>255) {$R=255;}
		if ($G>255) {$G=255;}
		if ($B>255) {$B=255;}
}
else{																//less so
	$R = ceil($R+((255-$R)*$proT/100));//uppýstur um % tölu		feided
	$G = ceil($G+((255-$G)*$proT/100));//uppýstur um % tölu
	$B = ceil($B+((255-$B)*$proT/100));//uppýstur um % tölu
}
switch ($Ret) {
		case '1':
			return $R;
		break;
		case '2':
			return $G;
		break;
		case '3':
			return $B;
		break;
	
	default:
		# code...
		break;
}
}
?>