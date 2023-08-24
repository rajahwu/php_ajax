<?php 
require_once '../lib/parsedown-1.7.4/Parsedown.php';
$parsedown = new Parsedown();

echo "<a href='..'>&lt; &lt; Back</a>";
$text = file_get_contents('request.md');
echo $parsedown->text($text);
echo "<hr />";
echo $parsedown->text(file_get_contents('responses.md'));
echo "<hr />";
echo $parsedown->text(file_get_contents('states-events.md'));
?>
