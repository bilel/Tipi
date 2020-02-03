<?php
//This file could be useful to accelerate Dynamic Dns Updating
require('Tipi.php');
$modem = new Mifi;
print($modem->check_modem()['wan_ipaddr']);
?>
