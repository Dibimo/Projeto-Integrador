<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';


$str_json = file_get_contents('php://input');

var_dump(json_decode($str_json));
