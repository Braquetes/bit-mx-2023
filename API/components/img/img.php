<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Access-Control-Allow-Methods: GET');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    echo json_encode(array('status' => false));
    exit;
}
$dir = "./subidas";
$dirint = dir($dir);
$array = array();
while (($archivo = $dirint->read()) !== false ){
    if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
        array_push($array,$archivo);
    }

}
$dirint->close();
if(empty($array)){
    echo json_encode(array(
        'status' => false,
        'msg' => 'no hay imagenes'
    ));

}else{
    echo json_encode(array(
        'status' => true,
        'img' => $array
    ));
}

exit;

