# kiosk_mode

Esta é apenas um página para ser usada como kiosk mode para o raspberry pi.

O objetivo é monitorar o funcionamento do raspberry e programas rodando nele.

O arquivo info_transmission.php solicita um arquivo que está no /var/www

include('../../acesso.php');

Esse aquivo so tem o login e senha para o transmission, nesse caso:

```php
<?php
	$usuario_transmission='seu login';
	$senha_transmission='sua senha';
?>
		
```			


