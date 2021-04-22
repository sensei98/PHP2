<?php

require_once('../../PHP-2/phpqrcode/qrlib.php');

QRcode::png($_GET['code']);    