<?php
header("Access-Control-Allow-Origin: *");
$context  = stream_context_create(array('http' => array('header' => 'Accept: application/json')));
$url = "http://data.taipei/opendata/datalist/apiAccess?scope=resourceAquire&rid=e6831708-02b4-4ef8-98fa-4b4ce53459d9" ;
$data = file_get_contents($url, false, $context);
print $data;
?>
