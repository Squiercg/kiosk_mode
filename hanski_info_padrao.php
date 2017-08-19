<?php

try {
    $homepage = file_get_contents('http://192.168.0.4/info_padrao.php');


if ($homepage===false) {
    echo "<h2>rasp_hanski Status</h2>";
    echo "<p><b>Offline</b></p>";
}
 
}catch (Exception $e) {
    /*Lembrete
      Keep in mind that if you use a URL as the filename attribute, and the external 
      resource is not reachable, the function will not return FALSE but instead an 
      exception will be thrown.
    */    
    echo '<p>Exceção capturada: ',  $e->getMessage(), "</p>";
}



echo $homepage;    



?>