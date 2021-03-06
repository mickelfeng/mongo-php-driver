--TEST--
MongoDB::setReadPreference() should allow empty tags parameter for primary mode
--SKIPIF--
<?php require_once dirname(__FILE__) ."/skipif.inc"; ?>
--FILE--
<?php require_once dirname(__FILE__) . "/../utils.inc"; ?>
<?php

$m = new_mongo();
$db = $m->phpunit;
var_dump($db->setReadPreference(Mongo::RP_PRIMARY, array()));
var_dump($db->getReadPreference());
?>
--EXPECT--
bool(true)
array(1) {
  ["type"]=>
  string(7) "primary"
}
