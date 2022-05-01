
<?php include 'header.php';?>


<img class="auta" src="https://patriotmagazin.cz/images/article-preview/850x567/20210824-091031.jpg" alt="ukazka vozoveho parku">

<h1 class="center">Náš cenník prenájmu vozidiel</h1>

<div class="tabulka_cennik" id="tabulka_cen">
<?php
echo "<table class='tabulka' border='10' cellpadding='10' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='1000'>";
include ("config.php");   
$var = mysqli_connect("$localhost","$user","$password","$db") or die ("connect error");
$sql = "select id, znacka, nazov, vybava, cena_za_menej_ako_tyzden, cena_za_menej_ako_mesiac, cena_za_viac_ako_mesiac from cennik";
$result = mysqli_query($var, $sql) or exit ("chybny dotaz");
//načítanie hodnôt do pola


echo "<tr>
    

    <td width='250'bgcolor='#ffffff' height='22'>Značka<b></b></td> 
    <td width='100'bgcolor='#ffffff' height='22'>Názov<b></b></td>
    <td width='180'bgcolor='#ffffff' height='32'>Výbava<b></b></td>
    <td width='200'bgcolor='#ffffff' height='32'>Cena za 1-6 dní<b></b></td>
    <td width='300'bgcolor='#ffffff' height='32'>Cena za 7-29 dní<b></b></td>
    <td width='200'bgcolor='#ffffff' height='32'>Cena za 30+ dní <b></b></td>

    
     </tr>";


while($row = mysqli_fetch_assoc($result))
		{ 
			$id = $row['id'];
            $znacka = $row['znacka'];
			$nazov = $row['nazov'];
			$vybava = $row['vybava'];
			$cena_za_menej_ako_tyzden = $row['cena_za_menej_ako_tyzden'];
            $cena_za_menej_ako_mesiac = $row['cena_za_menej_ako_mesiac'];
            $cena_za_viac_ako_mesiac = $row['cena_za_viac_ako_mesiac'];
//výpis hodnôt
echo "
     
  <tr>   
    <td width='250'bgcolor='#ffffff' height='22'><b> ".$znacka." </b></td> 
    <td width='100'bgcolor='#ffffff' height='22'><b> ".$nazov." </b></td>
    <td width='180'bgcolor='#ffffff' height='32'><b> ".$vybava." </b></td>
    <td width='200'bgcolor='#ffffff' height='32'><b> ".$cena_za_menej_ako_tyzden." </b></td>
    <td width='300'bgcolor='#ffffff' height='32'><b> ".$cena_za_menej_ako_mesiac." </b></td>
    <td width='200'bgcolor='#ffffff' height='32'><b> ".$cena_za_viac_ako_mesiac." </b></td>
  </tr>";
  }
  echo "</table>";
?>
</div>




<?php include 'footer.php';?>