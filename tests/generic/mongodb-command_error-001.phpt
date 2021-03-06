--TEST--
MongoDB::command() with unsupported database command
--SKIPIF--
<?php require dirname(__FILE__) ."/skipif.inc"; ?>
--FILE--
<?php
require dirname(__FILE__) . "/../utils.inc";

$m = mongo();
$db = $m->selectDb('phpunit');
$retval = $db->command(array());
var_dump($retval["errmsg"], $retval["bad cmd"], $retval["ok"]);
?>
--EXPECT--
string(13) "no such cmd: "
array(0) {
}
float(0)
