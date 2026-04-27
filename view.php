<?php
$filename = 'captured.txt';
if (file_exists($filename)) {
$data = file_get_contents($filename);
echo "<pre>$data</pre>";
}
?>