<?php
header("Access-Control-Allow-Origin: *");
$query = $_SERVER['QUERY_STRING'];
$raw_data = file_get_contents($query);
if(substr($raw_data, 0, 15) == "<methodResponse")
{
  $xml = simplexml_load_string($raw_data);
  $json = json_encode($xml);
  echo $json;
}
else
{
  echo $raw_data;
}
?>
