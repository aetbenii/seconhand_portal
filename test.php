<?php
require_once 'model/funktionen.inc.php';
spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');
spl_autoload_register('autoloadTraits');


$a = Artikel::finde(1);
var_dump(Person::finde($a->getPerson_id()));