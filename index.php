<?php
require_once("config/autoloader.php");

$obj = new Pessoa();

$obj->setName("Applicação Endogastrus");

echo($obj->getName());
