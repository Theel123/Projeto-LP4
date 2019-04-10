<?php
require('verifica.php');
session_start();
session_destroy();
header('Location: login_html.php');



?>