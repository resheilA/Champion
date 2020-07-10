<html>
<head>
<title>Logo creator</title>
</head>
<body>
Enter your website name :
<form method='post'>
<input type='text' name='text' size='30'><input type='submit' value='Submit'><br>
<B>KEEP REFRESHING</b>. For multi-color put '_' (Under) between the parted area. Example : For Bharatmart , Bharat in different color and mart in different so put Bharat_mart (Max limit is 3).  
</body>
<?php
 $text = $_POST["text"]; 
 $pieces = explode("_", $text);
for($j=0;$j<10;$j++)
{  
 
$bold = rand(0,1);
 
if($bold == 1){$bolds = "<b>";}
else{$bolds = "";} 

$randff = rand(1,31);
//List of font 
if($randff == 1){$randfont = "Helvetica"; }
if($randff == 2){$randfont = "Verdana";}
if($randff == 3){$randfont = "Gill Sans";} 	
if($randff == 4){$randfont = "Avantgarde";}
if($randff == 5){$randfont = "Helvetica Narrow";} 	
if($randff == 6){$randfont = "sans-serif"; 	}
if($randff == 7){$randfont = "Times";} 	
if($randff == 8){$randfont = "Times New Roman";}
if($randff == 9){$randfont = "Palatino";}
if($randff == 10){$randfont = "Bookman";}
if($randff == 11){$randfont = "New Century Schoolbook";}
if($randff == 12){$randfont = "serif";}
if($randff == 13){$randfont = "Andale Mono";}
if($randff == 14){$randfont = "Courier New";}
if($randff == 15){$randfont = "Courier";}  
if($randff == 16){$randfont = "Lucidatypewriter";}  	
if($randff == 17){$randfont = "Fixed";}  	
if($randff == 18){$randfont = "monospace";} 	
if($randff == 19){$randfont = "Comic Sans";} 
if($randff == 20){$randfont = "Comic Sans MS";}  	
if($randff == 21){$randfont = "Zapf Chancery";}  	
if($randff == 22){$randfont = "Coronetscript";}  	
if($randff == 23){$randfont = "Florence";}  	
if($randff == 24){$randfont = "Parkavenue";}  	
if($randff == 25){$randfont = "cursive";} 	
if($randff == 26){$randfont = "Impact";} 	
if($randff == 27){$randfont = "Arnoldboecklin";} 	
if($randff == 28){$randfont = "Oldtown";} 	
if($randff == 29){$randfont = "Blippo";} 	
if($randff == 30){$randfont = "Brushstroke";} 	
if($randff == 31){$randfont = "fantasy";}


$randfc = rand(31,42);
if($randfc == 31){$randcolor = "red";}
if($randfc == 32){$randcolor = "blue";}
if($randfc == 33){$randcolor = "black";}
if($randfc == 34){$randcolor = "orange";}
if($randfc == 35){$randcolor = "green";}
if($randfc == 36){$randcolor = "brown";}
if($randfc == 37){$randcolor = "pink";}
if($randfc == 38){$randcolor = "grey";}
if($randfc == 39){$randcolor = "crimson";}
if($randfc == 40){$randcolor = "yellow";}
if($randfc == 41){$randcolor = "darkblue";}
if($randfc == 42){$randcolor = "lightblue";}


$randfc = rand(31,42);
if($randfc == 31){$randcolor1 = "red";}
if($randfc == 32){$randcolor1 = "blue";}
if($randfc == 33){$randcolor1 = "black";}
if($randfc == 34){$randcolor1 = "orange";}
if($randfc == 35){$randcolor1 = "green";}
if($randfc == 36){$randcolor1 = "brown";}
if($randfc == 37){$randcolor1 = "pink";}
if($randfc == 38){$randcolor1 = "grey";}
if($randfc == 39){$randcolor1 = "crimson";}
if($randfc == 40){$randcolor1 = "yellow";}
if($randfc == 41){$randcolor1 = "darkblue";}
if($randfc == 42){$randcolor1 = "lightblue";}

$randfc = rand(31,42);
if($randfc == 31){$randcolor2 = "red";}
if($randfc == 32){$randcolor2 = "blue";}
if($randfc == 33){$randcolor2 = "black";}
if($randfc == 34){$randcolor2 = "orange";}
if($randfc == 35){$randcolor2 = "green";}
if($randfc == 36){$randcolor2 = "brown";}
if($randfc == 37){$randcolor2 = "pink";}
if($randfc == 38){$randcolor2 = "grey";}
if($randfc == 39){$randcolor2 = "crimson";}
if($randfc == 40){$randcolor2 = "yellow";}
if($randfc == 41){$randcolor2 = "darkblue";}
if($randfc == 42){$randcolor2 = "lightblue";}



/*
echo "<br>".$randfont."<br>";
echo $randcolor."<br>";
echo "<b><font face='$randfont' color='$randcolor' size='7'>$pieces[0]</font><br><BR>";
*/


if(isset($pieces[2]))
{
echo "<br>$bolds<font face='$randfont' color='$randcolor' size='7'>$pieces[0]</font><font face='$randfont' color='$randcolor1' size='7'>$pieces[1]</font><font face='$randfont' color='$randcolor2' size='7'>$pieces[2]</font><br><BR>";
}
else if(isset($pieces[1]))
{
echo "<br>$bolds<font face='$randfont' color='$randcolor' size='7'>$pieces[0]</font><font face='$randfont' color='$randcolor1' size='7'>$pieces[1]</font><br><BR>";
}
else
{
echo "<br>$bolds<font face='$randfont' color='$randcolor' size='7'>$pieces[0]</font><br><BR>";
}



}
?>