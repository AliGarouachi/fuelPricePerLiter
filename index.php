<?php 
header('access-control-allow-headers: *');
header('Access-Control-Allow-Origin: *');
$data=array('diesel'=>'3','gasoline'=>'4');
echo json_encode($data);