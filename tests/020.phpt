--TEST--
xdiff_string_patch_binary() with binary data
--SKIPIF--
<?php if (!extension_loaded("xdiff")) print "skip"; ?>
--FILE--
<?php 
$a = file_get_contents(__DIR__ . '/zend.png');
$b = file_get_contents(__DIR__ . '/logo.bdiff');
$c = xdiff_string_patch_binary($a, $b);
$d = file_get_contents(__DIR__ . '/php.png');
echo strcmp($c, $d);
?>
--EXPECT--
0
