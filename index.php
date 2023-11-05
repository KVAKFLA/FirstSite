<?php
require_once 'settings.php';

$sqlConnect = new mysqli($host, $user, $pass, $data);
if ($sqlConnect->connect_error) die ('connect error');