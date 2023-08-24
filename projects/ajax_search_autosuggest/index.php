<?php 
require_once '../../lib/parsedown-1.7.4/Parsedown.php';
$parsedown = new Parsedown();

echo "<a href=\"ajax_autosuggest\">Search Autosuggest Project</a>";
echo "<p>". $parsedown->text(file_get_contents('autosuggest.md')) . "</p>"; 
?>