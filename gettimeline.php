<?php
$myanswer = '{"cols":[{"label":"OpeningMove","type":"string"},{"label":"Convicts","type":"number"}],"rows":[';

$value = "Tinas value";
$number = 4;

//$myanswer = $myanswer . '{"c":[{"v":"Kings pawn (e4)"},{"v":44}]}';

//$myanswer = $myanswer . '{"c":[{"v":"'.$value.'"},{"v":'.$number.'}]}';



$file = fopen("countpeoplebyconvictionyear.csv","r");
$counter = 0;
while(! feof($file))
  {
	  $counter++;
  $line = fgetcsv($file);
  
  $value = $line[0];
  
  $mynumber = $line[1];
  
  if($value == "" && $mynumber == ""){
	  break;
  }
  
  if($value != ""){
  
  $number = (int)$mynumber;
  
$myanswer = $myanswer . '{"c":[{"v":"'.$value.'"},{"v":'.$number.'}]},';


  }
  
  }

$myanswer = substr_replace($myanswer, "", -1);  

fclose($file);


$myanswer = $myanswer . ']}';

echo $myanswer;


/*
echo '{"cols":[{"label":"OpeningMove","type":"string"},{"label":"Percentage","type":"number"}],
"rows":[{"c":[{"v":"Kings pawn (e4)"},{"v":44}]},{"c":[{"v":"I pawn (d4)"},{"v":31}]},
{"c":[{"v":"Knight to King 3 (Nf3)"},{"v":12}]},{"c":[{"v":"Queens bishop pawn (c4)"},{"v":10}]},
{"c":[{"v":"Other"},{"v":3}]}]}';
*/

?>