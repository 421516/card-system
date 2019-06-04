<?php
error_reporting(E_ERROR); require_once 'phpqrcode/phpqrcode.php'; $sp11a0e0 = urldecode($_GET['data']); QRcode::png($sp11a0e0);