<?php
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
   
$link = "https://maps.google.com/maps/api/geocode/xml?address=".urlencode($_GET["straddr"].",".$_GET["city"]. ",".$_GET["State"]."&key=AIzaSyBlPFdiaFnMCM3tk8qGfCBcxo3gRunFdZs");
    $data = file_get_contents($link);
    $output = simplexml_load_string($data);

   $lati = $output->result->geometry->location->lat;
   $longi = $output->result->geometry->location->lng;
 
  if($_GET["degree"] == 'Fahrenheit' )
    {
        $u = "us";
        $c = " &deg; F";
    }
    else if($_GET["degree"] == 'Celsius')
    {
        $u = "si";
        $c = " &deg; C";
    }
   $fclink = "https://api.forecast.io/forecast/596e1b483586addf58576ee562bde391/".$lati.",".$longi."?"."units=".$u."&"."exclude=flags" ;
     
   $json=file_get_contents($fclink);
   $fcdata=json_encode($json);
   echo $fcdata;

?>