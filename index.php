<!DOCTYPE html>
<html>
<head>
	<title> Mehmet Emin Adıgüzel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</style>
	
</head>
<body bgcolor="lightblue">
		<table align="center" border="1" width="500" cellspacing="0">
			<tr>
				<td align="center">
					
						<marquee behavior="alternate"><h1 class="anabaslik"> <font color="purple"><i> Emin'in Yemek Tarifleri</i>  </font></h1>
						</marquee>
					</td>
			</tr>
			<tr>
				<td>
					<form action="index.php" method="post">
				<label class="baslik"> Yemek Adı:</label>	
				<input class="kuturengi" type="textbox" name="yemekadi" size="29" style="margin-left: 35px;" placeholder="Yemek Adını Giriniz">

		
				</td>
			</tr>
			<tr>

				<td>
					<label style="float: left;" class="baslik">Yemek Tarifi:</label>
					<div></div>
					<textarea name="yemektarifi" rows="10" cols="29" placeholder="Yemek Tarifin Yazın" style="margin-left: 22px;"></textarea>
				</td>
			</tr>
			<tr>
				<td align="center"> 
					<input type="submit" value="Yemeği Ekle " class="buton" width="50">
					
				</td>
			</tr>
		</table>
		</form>
		<br>
		<br>
		<br>
		<center> 
		<?php 
error_reporting(0);
$dosya_adi = "yemektarifleri.txt";

$deger = $_POST["yemekadi"];
$deger2 = $_POST["yemektarifi"];

$yazilacak_deger = "$deger\n $deger2";

if ($deger) { 

if (!file_exists($dosya_adi)){ 
  
touch($dosya_adi);
chmod($dosya_adi,0666);
  
}


$dosyaya_baglanti = fopen($dosya_adi,"a+");

if (!fwrite($dosyaya_baglanti,$yazilacak_deger)){
echo "Dosyaya yazılamadı.";
exit;

} 

echo "Başarılı Bir Şekilde Yemek Tarifiniz Eklendi. Görmek İçin Tıklayınız. ==> ";

} else {

echo "Yemek Eklemediniz Lütfen Yemek ve Tarifleri Giriniz.  ";

}

?>
<a href='yemektarifleri.txt'>yemektarifleri.txt</a>
</center>
</body>
</html>