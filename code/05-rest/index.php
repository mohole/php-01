<?php 

$condition = isset($_GET["dateonly"]);

$today = date('d/m/Y');
$time = date('H:i');

if( $condition ) {
    $response = array(
        'date' => $today,
    );
} else {
    $response = array(
        'date' => $today,
        'time' => $time
    );
}

echo(json_encode($response));

?>