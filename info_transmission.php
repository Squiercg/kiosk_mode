<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('transmission_interface/TransmissionRPC.class.php' );
include('../../acesso.php');

$rpc = new TransmissionRPC($url = 'http://localhost:9091/transmission/rpc', $username = $usuario_transmission, $password = $senha_transmission,$return_as_array = true);


try
{
    $result = $rpc->sstats( );


    if ($result["arguments"]["activeTorrentCount"]==0) {
        echo '<div id="circulovermelho"></div>';
    } else {
        echo '<div id="circuloverde""></div>';
    }

    echo  "</br> Torrents Ativos:   ".$result["arguments"]["activeTorrentCount"]."/".$result["arguments"]["torrentCount"];
    echo  "</br> Upload: ".round(($result["arguments"]["uploadSpeed"]/1024.0),2)."kB/s";
    echo  "</br> Download: ".round(($result["arguments"]["downloadSpeed"]/1024.0),2)."kB/s";
    
} catch (Exception $e) {
    die('[ERRO!] ' . $e->getMessage() . PHP_EOL);
}




?>